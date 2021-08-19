<?php

namespace App\Http\Controllers;
// use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use App\User;
class ProfileController extends Controller
{
  public function profile() {
  	return view('user/profile/index');
  }
  public function edit() {
   		$user = auth()->user();
   		return view('admin.pages.profile.edit', [
   			'user' => $user
   		]);

   }
   public function update(Request $request, User $user)  {
   	$data = $request->validate([
        'name' => ['required', 'max:100'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'phone' => ['required', 'string'],
      ]);
   
      $user->update($data);
      return redirect()->route('profile.edit')->with('info', 'Profile Update Successfully');
   }
}
