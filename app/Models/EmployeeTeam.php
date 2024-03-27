<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lead;
use App\Models\Employee;

class EmployeeTeam extends Model
{
    use HasFactory;

    protected $fillable=['employee_id','lead_id'];

    public function lead()
    {
        return $this->belongsTo(Lead::class, 'lead_id');
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class,'employee_id');
    }
}
