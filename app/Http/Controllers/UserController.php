<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
   public function account() {
   	return view('user.account');
   }
   public function user() {
   	 \QrCode::size(200);
   							// ->generate('A basic example of QR code! Nicesnippets.com');
   	// return QrCode::size(200)
    //       ->generate('A basic example of QR code! Nicesnippets.com');
   	return view('user.user');
   }
}
