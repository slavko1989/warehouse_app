<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shifts;
use App\Models\Employee;

class ShiftsController extends Controller
{


    public function index(){

        return view('dashboard/shifts.index',[

            'shift'=>Shifts::all()
        ]);
    }

    public function add_shift(){

        return view('dashboard/shifts.create_shift',[
            'emp' => Employee::all()
    ]);
    }
    public function strore(Request $request){

            $shift = new Shifts;
            $data = $request->only([
                'shifts',
                'worked_from',
                'worked_to',
                'day_in_week',
                'employeeId'
            ]);

            $shift->fill($data);
            $shift->save();

            return redirect()->back()->with('message','Successfully saved shift for employee');
    }

    public function edit(){
        return view('dashboard/shifts.edit');

    }

    public function update(){

    }

    public function delete($id){

        shifts::where('id',$id)->firstOrFail()->delete();
        return redirect()->back()->with('message','Shifts has destroyed');
    }
}

