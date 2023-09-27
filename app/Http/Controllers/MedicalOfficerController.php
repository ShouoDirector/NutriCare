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

    public function MedicalOfficerProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        
        if($request->file('photo')){
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/medical_officer_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        return redirect()->back();
    }
}