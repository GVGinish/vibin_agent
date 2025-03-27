<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PolicyModel;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\DB;


class PolicyController extends Controller
{
   

   
    public function show(string $id)
    {
        $list = DB::table('policy_models')
            ->join('customer_models', 'policy_models.customer_id', '=', 'customer_models.customer_id')
            ->select('policy_models.*', 'customer_models.username', 'customer_models.phone', 'customer_models.email', 'customer_models.dob')
            ->where('policy_models.customer_id', $id)
            ->orderBy('policy_models.id', 'desc')
            ->get();
    
        return view('policy_list', compact('list'));
    }

    public function schedule(string $id)
    {
        $policy_data = PolicyModel::find($id);
        $customer_name = CustomerModel::where('customer_id',$policy_data->customer_id)->value('username');
        $list = json_decode($policy_data->term_schedule);
        return view('policy_schedule', compact('list','customer_name','policy_data'));
    }
    
 
    
    public function change_status(Request $request)
    {
        // Fetch the loan schedule
        $loanSchedule = PolicyModel::where('policy_number', $request->policy_number)->first();
    
        if (!$loanSchedule) {
            return response()->json(['status' => 'error', 'message' => 'Loan schedule not found.']);
        }
    
        // Decode the JSON EMI schedule
        $emiSchedule = json_decode($loanSchedule->term_schedule, true);
        if (json_last_error() !== JSON_ERROR_NONE || !is_array($emiSchedule)) {
            return response()->json(['status' => 'error', 'message' => 'Invalid EMI schedule data.']);
        }
    
        // Find the schedule to update
        $found = false;
        foreach ($emiSchedule as &$schedule) {
            if ($schedule['id'] == $request->id) {
                $found = true;
    
                // Accumulate paid amount
                $schedule['paid_amount'] += $request->paid_amount;
    
                // Calculate remaining balance
                $schedule['balance_amount'] = $loanSchedule['premium_amount'] - $schedule['paid_amount'];
    
                // Update status based on payment completion
                if ($schedule['balance_amount'] <= 0) {
                    $schedule['status'] = 'Paid';
                    $schedule['balance_amount'] = 0; // Ensure no negative balance
                } else {
                    $schedule['status'] = 'Partial'; // Mark as Partial Payment
                }
    
                break;
            }
        }
    
        if (!$found) {
            return response()->json(['status' => 'error', 'message' => 'Schedule not found.']);
        }
    
        // Update the loan schedule in the database
        $loanSchedule->term_schedule = json_encode($emiSchedule);
    
        // Update the main loan amounts
        $loanSchedule->paid_amount += $request->paid_amount;
        $loanSchedule->balance_amount -= $request->paid_amount;
    
        // Ensure the balance doesn't go negative
        if ($loanSchedule->balance_amount < 0) {
            $loanSchedule->balance_amount = 0;
        }
    
        $loanSchedule->save();
    
        // Check if all EMIs are paid
        $allPaid = true;
        foreach ($emiSchedule as $schedule) {
            if ($schedule['status'] !== 'Paid') {
                $allPaid = false;
                break;
            }
        }
    
        // If all EMIs are paid, close the loan
        if ($allPaid) {
            $loan = PolicyModel::where('policy_number', $request->policy_number)->first();
            if ($loan) {
                $loan->status = 'Closed';
                $loan->save();
            }
    
            // Update the loan schedule status
            $loanSchedule->status = 'Closed';
            $loanSchedule->save();
        }
    
        return response()->json(['status' => 'success']);
    }
    
    
}
