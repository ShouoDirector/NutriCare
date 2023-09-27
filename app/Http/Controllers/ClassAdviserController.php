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
    } //End Method

    public function ClassAdviserProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->phone = $request->phone;
        $data->address = $request->address;
        
        if($request->file('photo')){
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/class_adviser_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Class Adviser Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
