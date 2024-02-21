<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['f_name','l_name','email','date_of_birth','position','education','code_of_employee','profile_image','years_in_company'];
}
