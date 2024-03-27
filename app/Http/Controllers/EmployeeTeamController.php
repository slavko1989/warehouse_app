<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeTeam;
use App\Models\Employee;
use App\Models\Lead;

class EmployeeTeamController extends Controller
{
    public function index(){

        return view('dashboard.emp_team.index',['team'=>EmployeeTeam::all()]);
    }

    public function create(){

        return view('dashboard.emp_team.create',[
            'emp'=>Employee::whereHas('position', function ($query) {
                $query->whereIn('name', ['picker', 'forklift driver']);
            })->get(),
            'lead'=> Lead::all()
        ]);
    }

    public function store(Request $request){

      // Provera da li je poslata vrednost employee_id
      if ($request->filled('employee_id')) {
        // Dohvatanje selektovanih vrednosti za employee_id
        $employeeIds = $request->input('employee_id');

        // Provera da li su izabrani zaposleni
        if (count($employeeIds) > 0) {
            // Iteriranje kroz svaki izabrani ID zaposlenog
            foreach ($employeeIds as $employeeId) {
                // Kreiranje novog zapisa u tabeli EmployeeTeam za svakog izabranog zaposlenog
                $emp_team = new EmployeeTeam;
                $emp_team->employee_id = $employeeId;
                $emp_team->lead_id = $request->input('lead_id');
                $emp_team->save();
            }

            return redirect()->back()->with('message', 'Saved');
        }
    }

    // Ako nije izabran nijedan zaposleni, preusmeri korisnika sa porukom o grešci
    return redirect()->back()->with('error', 'No employees selected');
    }
}
