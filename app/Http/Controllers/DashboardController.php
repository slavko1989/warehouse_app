<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

     public function tables(){
        return view('dashboard.tables.tables');
    }

     public function signIn(){
        return view('dashboard.profile.signIn');
    }
}
