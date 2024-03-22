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

        $data = $request->only([
            'f_name','l_name','email','date_of_birth','years_in_company'
            ,'position','education','code_of_employee'
        ]);
        $image = $request->profile_image;
        if($image){
        $imgname = time().'.'.$image->getClientOriginalExtension();
        $request->profile_image->move(public_path('employee_image'),$imgname);
        $employee->profile_image=$imgname;
        }

        $employee->fill($data);
        $employee->save();

        return redirect()->back()->with('message','Employee created successfully');
    }

    public function delete($id){

        Employee::where('id',$id)->firstOrFail()->delete();
        return redirect()->back()->with('message','Employee has destroyed');

    }

    public function edit($id){

        $edit = Employee::find($id);
        return view('dashboard.employees.edit',compact('edit'));
    }

    public function update(EmployeeRequest $request,$id){

        $employee = Employee::find($id);

        $data = $request->only([
            'f_name','l_name','email','date_of_birth','years_in_company'
            ,'position','education','code_of_employee'
        ]);

        $image = $request->profile_image;
        if($image){
        $imgname = time().'.'.$image->getClientOriginalExtension();
        $request->profile_image->move(public_path('employee_image'),$imgname);
        $employee->profile_image=$imgname;
        }
        $employee->fill($data);
        $employee->update();
        return redirect()->back()->with('message','Employee updated successfully');

    }
}
