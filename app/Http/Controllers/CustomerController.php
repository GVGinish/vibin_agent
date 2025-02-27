<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

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

        $store = new CustomerModel();
        $store->user_id = 1; 
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
        
        if($store->save()){
            return response()->json(['status'=>'success','message'=>'Policy addes successfully']);
        }else{
            return response()->json(['status'=>'error','message'=>'Please check the data']);

        }

        





    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
