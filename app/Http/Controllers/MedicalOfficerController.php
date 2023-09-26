<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalOfficerController extends Controller
{
    public function MedicalOfficerDashboard(){
        return view('medical_officer.medical_officer_index');
    } //End Method 
}
