<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;

    protected $fillable = ['username','father_name','mother_name','dob','nominee_name','nominee_dob','phone','email','address','occupation','bank_name','ifsc','account_num'];

}
