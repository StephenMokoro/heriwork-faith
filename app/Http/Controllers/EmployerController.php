<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EmployerController extends Controller
{
    //



    // -------------------- [ user registration view ] -------------
    public function index()
    {
        return view('employer/employer_registration');
    }

    // --------------------- [ Register user ] ----------------------
    public function userPostRegistration(Request $request)
    {
          // validate form fields
          $request->validate([
            'employer_first_name'        =>      'required',
            'employer_last_name'         =>      'required',
            'personal_email'             =>      'required|email',
            'password'          =>      'required|min:6',
            'confirm_password'  =>      'required|same:password',
            'employer_phone'             =>      'required|min:5'
        ]);

    $input          =           $request->all();

    // if validation success then create an input array
    $inputArray      =           array(
        'employer_first_name'        =>      $request->employer_first_name,
        'employer_last_name'         =>      $request->employer_last_name,
        'employer_full_name'         =>      $request->employer_first_name . " ". $request->employer_last_name,
        'personal_email'             =>      $request->personal_email,
        'password'          =>      Hash::make($request->password),
        'employer_phone'             =>      $request->employer_phone
    );

    // register user
    $user           =         ModelsUser::create($inputArray);

    // if registration success then return with success message
    if(!is_null($user)) {
        return view('employer/employer_login')->with('success', 'You have registered successfully.');
    }

    // else return with error message
    else {
        return back()->with('error', 'Whoops! some error encountered. Please try again.');
    }
}



    // -------------------- [ User login view ] -----------------------
    public function userLoginIndex()
    {
        return view('employer/employer_login');
    }


    // --------------------- [ User login ] ---------------------
    public function userPostLogin(Request $request)
    {


        $request->validate([
            "personal_email"           =>   "required",
            "password"        =>    "required|min:6"
        ]);

        $userCredentials = $request->only('personal_email', 'password');
        $user = ModelsUser::where('personal_email', $request->personal_email)->first();

        // check user using auth function
        if (Auth::attempt($userCredentials)) {
            if ($user->status == 1) {
                return redirect()->intended('/post');
            }

            return redirect()->intended('pending');
        } else {
            return back()->with('error', 'Whoops! invalid username or password.');
        }
    }



    // ------------------ [ User Dashboard Section ] ---------------------
    public function dashboard(Request $r)
    {

        if ($r->session()->get('employer_auto_id') == "") {
            return redirect('/login');
        } else {
            $name = $r->session()->get('employer_first_name');
            $capsule = array('employer_first_name' => $name);

            return view('/post')->with($capsule);
        }
        // check if user logged in

    }


    // ------------------- [ User logout function ] ----------------------
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('user-login');
    }
}
