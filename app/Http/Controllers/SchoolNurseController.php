<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Foundation\Bootstrap\HandleExceptions;
use Illuminate\Support\Facades\Hash;

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
        $data->phone = $request->phone;
        $data->address = $request->address;
        
        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/school_nurse_images/' .$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/school_nurse_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'School Nurse Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//End Method

    public function SchoolNurseChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('school_nurse.school_nurse_change_password', compact('profileData'));
    }//End Method

    public function SchoolNurseUpdatePassword(Request $request){

        //Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);        

        //Match The Old Password
        if (!Hash::check($request->old_password, auth::user()->password)){

            $notification = array(
                'message' => 'Old Password Does Not Match!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

        //Update The New Password

        User::whereId(auth()->user()->id)->update(
            ['password' => Hash::make($request->new_password)

        ]);

        $notification = array(
            'message' => 'Password Changed Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);

    }//End Method
}
