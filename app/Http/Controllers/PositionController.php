<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;

class PositionController extends Controller
{
    public function index(){

        return view('dashboard/position.index',['position'=>Position::all()]);
    }

    public function create(){

        return view('dashboard/position.create');
    }
    public function store(Request $request){

        $position = new Position;
        $data = $request->only(['name']);
        $position->fill($data);
        $position->save();

        return redirect()->back()->with('message','Position is saved');
    }
}
