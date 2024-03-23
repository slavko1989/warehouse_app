<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productivity extends Model
{
    use HasFactory;




    protected $fillable = ['date',
    'the_norm_of_papers',
    'the_norm_of_boxes',
    'daily_of_papers',
    'daily_of_boxes',
    'employee_id'
];
}
