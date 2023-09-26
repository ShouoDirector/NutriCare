<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

    public function ClassAdviserProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('class_adviser.class_adviser_profile_view', compact('profileData'));
    }
}
