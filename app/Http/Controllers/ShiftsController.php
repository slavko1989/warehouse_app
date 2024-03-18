<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShiftsController extends Controller
{
    

    public function index(){
        
        return view('dashboard/shifts.index',[
            'shift'=>Shift::all()
        ]);
    }

    public function strore(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function delete(){
        
    }
}

