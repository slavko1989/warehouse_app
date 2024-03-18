<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shifts extends Model
{
    use HasFactory;

    protected $fillable = ['shifts','worked_from','worked_to','day_in_week','employeeId'];
}
