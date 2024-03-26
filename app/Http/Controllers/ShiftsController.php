<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shifts;
use App\Models\Employee;

class ShiftsController extends Controller
{


    public function index(){

        return view('dashboard/shifts.index',[

            'shift' => Shifts::where('shifts', 'first')->with('employee')->get(),
            'shift_2' => Shifts::where('shifts', 'second')->with('employee')->get(),
            'shift_3' => Shifts::where('shifts', 'third')->with('employee')->get()



        ]);
    }

    public function add_shift(){

        return view('dashboard/shifts.create_shift',[
            'emp' => Employee::all()
    ]);
    }
    public function store(Request $request){

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

    public function edit($id){

        return view('dashboard/shifts.edit',
        [
        'edit'=>Shifts::find($id),
        'emp' => Employee::all()
        ]);

    }

    public function update(Request $request,$id){

        $shift = Shifts::find($id);
            $data = $request->only([
                'shifts',
                'worked_from',
                'worked_to',
                'day_in_week',
                'employeeId'
            ]);

            $shift->fill($data);
            $shift->update();
            $request->session()->put('selected_employee_id', $request->employeeId);

            return redirect()->back()->with('message','Successfully saved shift for employee');
    }

    public function delete($id){

        shifts::where('id',$id)->firstOrFail()->delete();
        return redirect()->back()->with('message','Shifts has destroyed');
    }
}

