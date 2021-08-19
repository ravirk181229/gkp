<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact; 
use Mail; 

class ContactController extends Controller
{
   public function getContact() { 
       return view('pages.contact'); 
     } 

      public function saveContact(Request $request) { 

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;

        $contact->save();
        \Mail::send('contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'phone_number' => $request->get('phone_number'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('django181229@gmail.com')
                  ->subject('Ghar Ka Patta Contact Form');
               });
        
        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
    }
}
