<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

    public function MedicalOfficerProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('medical_officer.medical_officer_profile_view', compact('profileData'));
    }   //End Method
}