<?php

namespace App\Http\Controllers;

use App\Models\Expressiontable;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Session;

use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    //
    //
    function index()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }

    function validate_registration(Request $request)
    {
        $request->validate([
            'others',
            'student_first_name'         =>   'required',
            'student_last_name'         =>   'required',
            'student_email'        =>   'required|email|unique:expressiontables',
            'student_phone'        =>   'required',
            

        ]);

        $data = $request->all();

        Expressiontable::create([
            'others' => $data['others'],
            'student_first_name'  =>  $data['student_first_name'],
            'student_last_name'  =>  $data['student_last_name'],
            'student_phone' =>  $data['student_phone'],
            'student_email' =>  $data['student_email'],



        ]);

        return back()->with('success', 'Registration Completed, now you can login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'student_email' =>  'required',
            'password'  =>  'required'
        ]);
        $user = User::where('student_email', $request->student_email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->route('login')->with('error', 'Invalid email or password.');
        }
        

        return back();

       
       
    }

    function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

   
}
