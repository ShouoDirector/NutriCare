<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

    public function SchoolNurseProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('school_nurse.school_nurse_profile_view', compact('profileData'));
    }   //End Method

    public function SchoolNurseProfileStore(Request $request){
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
            $file->move(public_path('upload/school_nurse_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        return redirect()->back();
    }
}
