<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\User;
//use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

use Illuminate\Support\Str;

class SettingsController extends Controller
{
    //
    public function index()
    {     
        $userprofile = User::find(Auth::id());

        return view('author.settings', compact('userprofile'));
    }




public function updateProfile(Request $request)
{
    

    $user = User::findOrFail(Auth::id());

    if ($request->file('image')){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(128,128)->save('upload/profile/'.$name_gen);
        $imageName = 'http://127.0.0.1:8000/upload/profile/'.$name_gen;


    }

  
   

    $user->name = $request->name;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->image = $imageName;
    $user->about = $request->about;

    $user->save();
    
    return redirect()->back();
}



 public function updatePassword(Request $request)
 {
     $this->validate($request,[
         'old_password' => 'required',
         'password' => 'required|confirmed',
     ]);

     $hashedPassword = Auth::user()->password;
     if (Hash::check($request->old_password,$hashedPassword))
     {
         if (!Hash::check($request->password,$hashedPassword))
         {
             $user = User::find(Auth::id());
             $user->password = Hash::make($request->password);
             $user->save();
             //Toastr::success('Password Successfully Changed','Success');
             Auth::logout();
             return redirect()->back();

         } else {
             //Toastr::error('New password cannot be the same as old password.','Error');
             return redirect()->back();
         }

     } else {
         //Toastr::error('Current password not match.','Error');
         return redirect()->back();
     }




}   



















}
