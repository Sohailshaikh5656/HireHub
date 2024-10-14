<?php

namespace App\Http\Controllers\UserControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactControllers extends Controller
{
    public function contactPage(){
        return view("user.contact");
    }
    public function contactStore(Request $req){
        $validateData = $req->validate([
            'fname'=>'required|string|min:3',
            'lname'=>'required|string|min:3',
            'email'=>'required|string',
            'subject'=>'required|string|min:3',
            'message'=>'required|string|min:10'
        ]);
        if($validateData){
            $contact = new contact();
            $contact->first_name = $validateData['fname'];
            $contact->last_name = $validateData['lname'];
            $contact->email = $validateData['email'];
            $contact->subject = $validateData['subject'];
            $contact->message = $validateData['message'];
            $contact->save();
            session(['contact_save'=>true]);
            return redirect('/user/contact')->with('success', 'Your message has been sent successfully!');
        }
        else{
            session(['contact_error'=>true]);
            return redirect('/user/contact')->with('error', 'There was a problem with your submission.');
        }


    }
}
