<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PolicyModel;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\DB;


class PolicyController extends Controller
{
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
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

        /**
     * Display the specified resource.
     */
    public function schedule(string $id)
    {
        $policy_data = PolicyModel::find($id);
        $customer_name = CustomerModel::where('customer_id',$policy_data->customer_id)->value('username');
        $list = json_decode($policy_data->term_schedule);
        return view('policy_schedule', compact('list','customer_name','policy_data'));
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
