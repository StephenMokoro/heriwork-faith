<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    //
    public function contact()
    {
        return view('welcome');
    }

    public function contactpage(Request $request)
    {
        $request->validate([

            'name'        =>      'required',
            'email'             =>      'required|email',
            'subject'         =>      'required',
            'message'         =>      'required',
        ]);
        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $res = $contact->save();
        if ($res) {
            Alert::success('Success', 'You\'ve Successfully sent ');

            return back();
        } else {
            Alert::error('Failed', 'Please try again');

            return back();
        }
    }
}
