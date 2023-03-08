<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ExpressiontableController extends Controller
{
    //


  public  function check_user(Request $request)
    {
        $student_email = $request->student_email;
    $password= $request->password;

    $session =  Student::where('student_email',$student_email)->where('password',$password)->get();
     if(count($session)>0){

        $request->session()->put('id',$session[0]->id);
        $request->session()->put('name',$session[0]->name);
   return redirect('/welcome');

     }else{
        return redirect('/login')->with('msg','email or password wrong');
     }
    }
    
}

