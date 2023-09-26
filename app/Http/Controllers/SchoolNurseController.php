<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SchoolNurseController extends Controller
{
    public function SchoolNurseDashboard(){
        return view('school_nurse.school_nurse_index');
    }

    public function SchoolNurseLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/school_nurse/login');
    } //End Method

    public function SchoolNurseLogin(){
        return view('school_nurse.school_nurse_login');
    } //End Method
}
