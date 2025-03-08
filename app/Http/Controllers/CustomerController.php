<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;
use App\Models\PolicyModel;
use Illuminate\Support\Facades\DB;
use DateTime;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('add_customer_page');
    }

   

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'username'	    => 'required',
            'father_name'   => 'required',	
            'mother_name'	=> 'required',
            'dob'	        => 'required|date',
            'nominee_name'	=> 'required',
            'nominee_dob'	=> 'required|date',
            'phone'	        => 'required',
            'email'	        => 'required|email',
            'address'	    => 'required',
            'occupation'	=> 'required',
            'bank_name'	    => 'required',
            'ifsc'	        => 'required|size:11',
            'account_num'   => 'required|digits_between:11,18',
            'policy_type'   => 'required',
            'premium_amount'=> 'required|numeric',
            'policy_number' => 'required',
            'policy_name'   => 'required',
            'premium_term'  => 'required|integer',
            'maturity_term' => 'required|integer|gte:premium_term',
        ]);
    
        DB::beginTransaction();
        try {
            $lastCustomer = CustomerModel::orderBy('customer_id', 'desc')->first();
            $lastId = $lastCustomer ? (int) str_replace('CUST', '', $lastCustomer->customer_id) : 0;
            $rid = 'CUST' . str_pad($lastId + 1, 3, '0', STR_PAD_LEFT);
    
            $store = new CustomerModel();
            $store->customer_id = $rid; 
            $store->username = $request->username; 
            $store->father_name = $request->father_name;  
            $store->mother_name = $request->mother_name;  
            $store->dob = $request->dob;  
            $store->nominee_name = $request->nominee_name;  
            $store->nominee_dob = $request->nominee_dob;  
            $store->phone = $request->phone;
            $store->email = $request->email;  
            $store->address = $request->address;  
            $store->occupation = $request->occupation;  
            $store->bank_name = $request->bank_name;
            $store->ifsc = $request->ifsc;  
            $store->account_num = $request->account_num;
    
            $policy_type = $request->policy_type;  
            $term_amount = $request->premium_amount;  
    
            $termDates = [];
            $counter = 1;
    
            $termStart = new DateTime($request->start_date);
            $termEnd = clone $termStart;
            $termEnd->modify('+' . ($request->maturity_term * 12) . ' months');
    
            if ($policy_type == 'Monthly') {
                while ($termStart <= $termEnd) {
                    $termDates[] = [
                        'id' => $counter,
                        'date' => $termStart->format('Y-m-d'),
                        'status' => 'Pending',
                        'paid_amount' => 0,
                        'balance_amount' => $term_amount,
                        'premium_amount' => $request->premium_amount,
                    ];
                    $termStart->modify('+1 month');
                    $counter++;
                }
            } elseif ($policy_type == 'Quarterly') {
                while ($termStart <= $termEnd) {
                    $termDates[] = [
                        'id' => $counter,
                        'date' => $termStart->format('Y-m-d'),
                        'status' => 'Pending',
                        'paid_amount' => 0,
                        'balance_amount' => $term_amount,
                        'premium_amount' => $request->premium_amount,
                    ];
                    $termStart->modify('+3 months');
                    $counter++;
                }
            } elseif ($policy_type == 'Half Yearly') {
                while ($termStart <= $termEnd) {
                    $termDates[] = [
                        'id' => $counter,
                        'date' => $termStart->format('Y-m-d'),
                        'status' => 'Pending',
                        'paid_amount' => 0,
                        'balance_amount' => $term_amount,
                        'premium_amount' => $request->premium_amount,
                    ];
                    $termStart->modify('+6 months');
                    $counter++;
                }
            } elseif ($policy_type == 'Yearly') {
                while ($termStart <= $termEnd) {
                    $termDates[] = [
                        'id' => $counter,
                        'date' => $termStart->format('Y-m-d'),
                        'status' => 'Pending',
                        'paid_amount' => 0,
                        'balance_amount' => $term_amount,
                        'premium_amount' => $request->premium_amount,
                    ];
                    $termStart->modify('+1 year');
                    $counter++;
                }
            }
    
            $policy = new PolicyModel();
            $policy->customer_id = $rid;
            $policy->policy_number = $request->policy_number;
            $policy->policy_type = $request->policy_type;
            $policy->premium_amount = $request->premium_amount;
            $policy->policy_name = $request->policy_name;
            $policy->premium_term = $request->premium_term; 
            $policy->maturity_term = $request->maturity_term;
            $policy->term_schedule = json_encode($termDates);    
    
            if ($store->save() && $policy->save()) {
                DB::commit();
                return response()->json(['status' => 'success', 'message' => 'Policy added successfully']);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'error', 'message' => 'Please check the data', 'error' => $e->getMessage()]);
        }
    }
    
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $list = CustomerModel::orderBy('id','desc')->get();
        return view('personal_detail',compact('list'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
