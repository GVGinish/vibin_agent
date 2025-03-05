<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;
use App\Models\PolicyModel;


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
            'username'	        => 'required',
            'father_name'       => 'required',	
            'mother_name'	    => 'required',
            'dob'	            => 'required',
            'nominee_name'	    => 'required',
            'nominee_dob'	    => 'required',
            'phone'	            => 'required',
            'email'	            => 'required',
            'address'	        => 'required',
            'occupation'	    => 'required',
            'bank_name'	        => 'required',
            'ifsc'	            => 'required',
            'account_num'       => 'required',
        ]);

        $lastProduct = CustomerModel::orderBy('customer_id', 'desc')->first();
        $lastId = $lastProduct ? (int) str_replace('CUST', '', $lastProduct->customer_id) : 0;
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
        
        $lastPolicy = PolicyModel::orderBy('policy_id', 'desc')->first();
        $policyId = $lastPolicy ? (int) str_replace('PLY', '', $lastPolicy->policy_id) : 0;
        $rid1 = 'PLY' . str_pad($policyId + 1, 3, '0', STR_PAD_LEFT);

        $policy = new PolicyModel();
        $policy->customer_id = $rid;
        $policy->policy_id = $rid1;
        $policy->policy_type = $request->policy_type;
        $policy->premium_amount = $request->premium_amount;
        $policy->tenure = $request->tenure;
        $policy->maturity_amount = $request->maturity_amount;        
        
        if($store->save() && $policy->save()){
            return response()->json(['status'=>'success','message'=>'Policy addes successfully']);
        }else{
            return response()->json(['status'=>'error','message'=>'Please check the data']);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('personal_detail');
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
