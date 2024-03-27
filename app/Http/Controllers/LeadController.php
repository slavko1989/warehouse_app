<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Employee;

class LeadController extends Controller
{
    public function index(){
        return view('dashboard.lead.index',['lead'=>Lead::all()]);
    }

    public function create(){
        return view('dashboard.lead.create',['employee'=>Employee::all()]);
    }

    public function store(Request $request){

        $lead = new Lead;
        $data = $request->only(['name','employee_id']);
        $lead->fill($data);
        $lead->save();
        return redirect()->back()->with('message','Lead created');
    }
}
