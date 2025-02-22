<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function add_policy_page(){

        return view('add_policy_page');
    }

}
