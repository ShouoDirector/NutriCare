<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ClassAdviserController extends Controller
{
    public function ClassAdviserDashboard(){
        return view('class_adviser.class_adviser_index');
    }

    public function ClassAdviserLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/class_adviser/login');
    } //End Method

    public function ClassAdviserLogin(){
        return view('class_adviser.class_adviser_login');
    } //End Method
}
