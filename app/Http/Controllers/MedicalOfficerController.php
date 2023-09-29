<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Foundation\Bootstrap\HandleExceptions;
use Illuminate\Support\Facades\Hash;

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
        $data->phone = $request->phone;
        $data->address = $request->address;
        
        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/medical_officer_images/' .$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/medical_officer_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Medical Officer Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//End Method

    public function MedicalOfficerChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('medical_officer.medical_officer_change_password', compact('profileData'));
    }//End Method

    public function MedicalOfficerUpdatePassword(Request $request){

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