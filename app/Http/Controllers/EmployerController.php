<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EmployerController extends Controller
{
    //

   
    
     // -------------------- [ user registration view ] -------------
        public function index() {
            return view('employer/employer_registration');
        }
    
    // --------------------- [ Register user ] ----------------------
        public function userPostRegistration(Request $request) {
    
            // validate form fields
            $request->validate([
                    'employer_first_name'        =>      'required',
                    'employer_last_name'         =>      'required',
                    'personal_email'             =>      'required|email',
                    'password'          =>      'required|min:6',
                    'confirm_password'  =>      'required|same:password',
                    'employer_phone'             =>      'required'
                ]);
    
            $input          =           $request->all();
    
            // if validation success then create an input array
            $inputArray      =           array(
                'employer_first_name'        =>      $request->employer_first_name,
                'employer_last_name'         =>      $request->employer_last_name,
                'personal_email'             =>      $request->personal_email,
                'password'          =>      Hash::make($request->password),
                'employer_phone'             =>      $request->employer_phone
            );
    
            // register user
            $user           =      ModelsUser::create($inputArray);
    
            // if registration success then return with success message
            if(!is_null($user)) {
                return back()->with('success', 'You have registered successfully.');
            }
    
            // else return with error message
            else {
                return back()->with('error', 'Whoops! some error encountered. Please try again.');
            }
        }
    
    
    
    // -------------------- [ User login view ] -----------------------
        public function userLoginIndex() {
            return view('employer/employer_login');
        }
    
    
    // --------------------- [ User login ] ---------------------
        public function userPostLogin(Request $request) {
    
            $request->validate([
                "personal_email"           =>    "required|email",
                "password"        =>    "required|min:6"
            ]);
    
            $userCredentials = $request->only('org_email', 'password');
    
            // check user using auth function
            if (Auth::attempt($userCredentials)) {
                return redirect()->intended('dashboard');
            }
    
            else {
                return back()->with('error', 'Whoops! invalid username or password.');
            }
        }
    
    
    // ------------------ [ User Dashboard Section ] ---------------------
        public function dashboard() {
    
            // check if user logged in
            if(Auth::check()) {
                return view('dashboard');
            }
    
            return redirect::to("user-login")->withError('Oopps! You do not have access');
        }
    
    
    // ------------------- [ User logout function ] ----------------------
    public function logout(Request $request ) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('user-login');
        }
    }