<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Student;

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
             'school_name',
            'institution_id' => 'required',
            'student_first_name'         =>   'required',
            'student_last_name'         =>   'required',
            'institution_id' => 'required',
            'student_email'        =>   'required|email|unique:students',
            'student_phone'        =>   'required',
            'password'     =>   'required|min:6',
            'confirm_password'  =>      'required|same:password',

        ]);

        $data = $request->all();

        Student::create([
            'others' => $data['others'],
            'student_first_name'  =>  $data['student_first_name'],
            'student_last_name'  =>  $data['student_last_name'],
            'institution_id'  =>  $data['institution_id'],
            'student_email' =>  $data['student_email'],
            'student_phone' =>  $data['student_phone'],
            'password' => Hash::make($data['password']),


        ]);

        return redirect('student_login')->with('success', 'Registration Completed, now you can login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'student_email' =>  'required',
            'password'  =>  'required'
        ]);
        $user = Student::where('student_email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->route('login')->with('error', 'Invalid email or password.');
        }

        if ($user->status != 1) {
            return redirect()->route('login')->with('error', 'Your account is not approved.');
        }
        Auth::login($user);
        return view('dashboard');
    }

    function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
}
