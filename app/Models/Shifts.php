<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Shifts extends Model
{
    use HasFactory;

    protected $fillable = ['shifts','worked_from','worked_to','day_in_week','employeeId'];
    // U modelu Shift

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employeeId');
    }
}
