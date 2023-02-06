<?php

namespace App\Http\Controllers;
use App\Models\contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function addview(){

        return view ('index');
    }

    public function addcontact(Request $req){

     $validated = $req->validate([
        'name'=> 'required|string',
        'email'=> 'required|email',
        'subject'=> 'required|string',
        'message'=> 'required|string',
     ]);
     $cont = new contact();
     $cont ->name = $req->name;
    $cont-> email = $req->email;
     $cont->subject =$req->subject;
     $cont->message= $req->message;
        $cont->save();
       
            return view('index');
    }
}
