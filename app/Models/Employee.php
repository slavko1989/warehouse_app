<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shifts;
use App\Models\Position;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['f_name','l_name','email','date_of_birth','position','education','code_of_employee','profile_image','years_in_company','positionId'];
    // U modelu Employee
public function shifts()
{
    return $this->hasMany(Shifts::class, 'employee_id');
}

public function position() {
    return $this->belongsTo(Position::class,'positionId');
}

}
