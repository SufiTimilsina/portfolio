<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getcontact()
    {    
        $list = [
            'aboutlist' => About::all()
        ];
        return view('pages.contact', $list);
    }


    public function contactus(Request $request)
     { 
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
            
        ]);
    
            $contact = new Contact;
    
            $contact->name = $request->input('name');
            $contact->email = $request->input('email');
            $contact->message = $request->input('message');
            $contact->save();
            
            return redirect()->route('contact')->with('status','Your message is send.');
    
        }
}
