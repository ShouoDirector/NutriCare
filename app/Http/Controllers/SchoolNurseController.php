<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolNurseController extends Controller
{
    public function SchoolNurseDashboard(){
        return view('school_nurse.school_nurse_dashboard');
    }
}
