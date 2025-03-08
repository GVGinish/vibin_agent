<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CustomerModel;

class PolicyModel extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id','policy_number','policy_type','premium_amount','policy_name','premium_term','maturity_term','term_schedule'];

   


}
