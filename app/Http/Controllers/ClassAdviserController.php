<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassAdviserController extends Controller
{
    public function ClassAdviserDashboard(){
        return view('class_adviser.class_adviser_dashboard');
    }
}
