<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{
    use HasFactory;
    protected $fillable=['employee_id',
    'salary',
    'number_of_year_in_the_company',
    'contract',
    'salary_tax',
    'overtime_hours'];
}
