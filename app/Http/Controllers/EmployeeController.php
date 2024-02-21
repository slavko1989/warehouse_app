<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    public function create(){
        
        return view('dashboard/employees.index',[
            'employee'=>Employee::all()
        ]);
    }

    public function new_employee(){

        return view('dashboard/employees.new_employee');
    }

    public function store(EmployeeRequest $request){

        $employee = new Employee;
        $employee->f_name = $request->input('f_name');
        $employee->l_name = $request->input('l_name');
        $employee->email = $request->input('email');
        $employee->date_of_birth = $request->input('date_of_birth');
        $employee->years_in_company = $request->input('years_in_company');
        $employee->position = $request->input('position');
        $employee->education = $request->input('education');
        $employee->code_of_employee = $request->input('code_of_employee');

        $image = $request->profile_image;
        if($image){
        $imgname = time().'.'.$image->getClientOriginalExtension();
        $request->profile_image->move(public_path('employee_image'),$imgname);
        $employee->profile_image=$imgname;
        }

        $employee->save();

        return redirect()->back()->with('message','Employee created successfully');
    }

    public function delete($id){


        Employee::where('id',$id)->firstOrFail()->delete();
        return redirect()->back()->with('message','Employee has destroyed');

    }
}
