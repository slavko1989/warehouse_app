<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productivity;
use App\Http\Requests\ProductivityRequest;
use App\Models\Employee;

class ProductivityController extends Controller
{
     public function create(){

        return view('dashboard/productivities.index',[
            'productivity'=>Productivity::all()
        ]);
    }

    public function new_productivity(){

        return view('dashboard/productivities.new_productivity',[
            'employee'=>Employee::all()
        ]);
    }

    public function store(ProductivityRequest $request){


        $productivity = new Productivity;
        $productivity->date = $request->input('date');
        $productivity->the_norm_of_papers = $request->input('the_norm_of_papers');
        $productivity->the_norm_of_boxes = $request->input('the_norm_of_boxes');
        $productivity->daily_of_boxes = $request->input('daily_of_boxes');
        $productivity->daily_of_papers = $request->input('daily_of_papers');
        $productivity->employee_id = $request->input('employee_id');


        if($productivity->save()){

        return redirect()->back()->with('message','productivity created successfully');
    }else{

        return redirect()->back()->with('bag','fuck');
        }
    }

    public function delete($id){

        productivity::where('id',$id)->firstOrFail()->delete();
        return redirect()->back()->with('message','Productivity has destroyed');

    }
}
