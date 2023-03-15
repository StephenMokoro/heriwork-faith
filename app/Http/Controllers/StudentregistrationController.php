<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StudentregistrationController extends Controller
{
    public function login()
    {
        return view("student.student_login");
    }
    public function registration()
    {
        return view("student.student_reg");
    }

    public function registerUser(Request $request)
    {
        $request->validate([

            'student_first_name'        =>      'required',
            'student_last_name'         =>      'required',
            'student_email'             =>      'required|email',
            'student_phone'             =>      'required|min:5',
            'upload_cv'             =>      'required',
            'progress_report'             =>      'required',
            'password'          =>      'required|min:6',
            'confirm_password'  =>      'required|same:password',
            'institution_id'             =>      'required',
            'upload_cv' => 'required',
            'progress_report' => 'required',


        ]);
        $student = new Student();

        $student->student_first_name = $request->student_first_name;
        $student->student_last_name = $request->student_last_name;
        $student->student_email = $request->student_email;
        $file = $request->upload_cv;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->upload_cv->move('cvs', $filename);

        $student->upload_cv = $filename;
        //         'employer_full_name'         =>      $request->employer_first_name . " ". $request->employer_last_name,
        $reports = $request->progress_report;
        $reportname = time() . '.' . $reports->getClientOriginalExtension();
        $request->progress_report->move('progress', $reportname);
        $student->progress_report = $reportname;
        $student->password = Hash::make($request->password);
        $student->student_phone = $request->student_phone;
        $student->upload_cv = $request->upload_cv;
        $student->progress_report = $request->progress_report;
        $student->institution_id = $request->institution_id;


        $res = $student->save();
        if ($res) {
            return back()->with('success', 'Registration successful');
        } else {
            return back()->with('fail', 'something wrong');
        }
    }
        
        public function loginUser(Request $request)
        {
            $request->validate([
    
                'student_email' => 'required|email|',
    
                'password' => 'required|min:5',
    
            ]);
            $student = Student::where('school_email', '=', $request->school_email)->first();
            if ($student) {
                if(Hash::check($request->password,$student->password)){
                $request->session()->put('loginId', $student->student_auto_id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'This password not correct');
            }
        }
        }
    
        public function dashboard()
        {
            $data = array();
            if (Session::has('loginId')) {
    
                $data = Student::where('student_auto_id', Session::get('loginId'))->first();
            }
            return view('employer.employer_home', compact('data'));
        }
        public function logout(Request $request)
        {
            if (Session::has('loginId')) {
                Session::pull('loginId');
                return  view('employer/employer_details/employer_login');
            }
        }
    }

    //



    // -------------------- [ user registration view ] -------------
    //     public function index()
    //     {
    //         return view('employer/employer_registration');
    //     }

    //     // --------------------- [ Register user ] ----------------------
    //     public function userPostRegistration(Request $request)
    //     {
    //           // validate form fields
    //           $request->validate([
    //             'employer_first_name'        =>      'required',
    //             'employer_last_name'         =>      'required',
    //             'personal_email'             =>      'required|email',
    //             'password'          =>      'required|min:6',
    //             'confirm_password'  =>      'required|same:password',
    //             'employer_phone'             =>      'required|min:5'
    //         ]);

    //     $input          =           $request->all();

    //     // if validation success then create an input array
    //     $inputArray      =           array(
    //         'employer_first_name'        =>      $request->employer_first_name,
    //         'employer_last_name'         =>      $request->employer_last_name,
    //         'employer_full_name'         =>      $request->employer_first_name . " ". $request->employer_last_name,
    //         'personal_email'             =>      $request->personal_email,
    //         'password'          =>      Hash::make($request->password),
    //         'employer_phone'             =>      $request->employer_phone
    //     );

    //     // register user
    //     $user           =         ModelsUser::create($inputArray);

    //     // if registration success then return with success message
    //     if(!is_null($user)) {
    //         return view('employer/employer_login')->with('success', 'You have registered successfully.');
    //     }

    //     // else return with error message
    //     else {
    //         return back()->with('error', 'Whoops! some error encountered. Please try again.');
    //     }
    // }



    // -------------------- [ User login view ] -----------------------
    // public function userLoginIndex()
    // {
    //     return view('employer/employer_login');
    // }


    // --------------------- [ User login ] ---------------------
    // public function userPostLogin(Request $request)
    // {


    //     $request->validate([
    //         "personal_email"           =>   "required",
    //         "password"        =>    "required|min:6"
    //     ]);

    //     $userCredentials = $request->only('personal_email', 'password');
    //     $user = ModelsUser::where('personal_email', $request->personal_email)->first();

    // check user using auth function
    //     if (Auth::attempt($userCredentials)) {
    //         if ($user->status == 1) {
    //             return redirect()->intended('/internship');
    //         }

    //         return redirect()->intended('pending');
    //     } else {
    //         return back()->with('error', 'Whoops! invalid username or password.');
    //     }
    // }



    // ------------------ [ User Dashboard Section ] ---------------------
    // public function dashboard(Request $r)
    // {

    //     if(Auth::check()) {
    //         return view('employer.internship.index');
    //     }

    //     return redirect::to("user-login")->withSuccess('Oopps! You do not have access');


    // }


    // // ------------------- [ User logout function ] ----------------------
    // public function logout(Request $request)
    // {
    //     $request->session()->flush();
    //     Auth::logout();
    //     return Redirect('user-login');
    // }

