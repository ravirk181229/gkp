<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }    
    public function changepassword() {
        return view('user/changepassword');
    }

    public function Passwordupdate(Request $request)
    {
      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
       if ($newpass === $confirm) {
          $user=User::find(Auth::id());
          $user->password=Hash::make($request->password);
          $user->save();
          Auth::logout();
           return redirect()->route('login')->with('success', 'Password Changed Successfully ! Now Login with Your New Password'); 
        }else{
          return redirect()->back()->with('warning', 'New password and Confirm Password not matched!');
        }     
      }else{
        return redirect()->back()->with('warning', 'Old Password not matched!');
      }
    }
}
