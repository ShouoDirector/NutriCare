<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MedicalOfficerController extends Controller
{
    public function MedicalOfficerDashboard(){
        return view('medical_officer.medical_officer_index');
    } //End Method 

    public function MedicalOfficerLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/medical_officer/login');
    } //End Method

    public function MedicalOfficerLogin(){
        return view('medical_officer.medical_officer_login');
    } //End Method
}
