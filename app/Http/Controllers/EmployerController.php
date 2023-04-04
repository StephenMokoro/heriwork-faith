<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\Employer;
use RealRashid\SweetAlert\Facades\Alert;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\UserVerify;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Mime\Address;

use Illuminate\Support\Facades\Redirect;

class EmployerController extends Controller
{
    //
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employers = Employer::all();
        return view('Employer.Employer-auth.create-step-one', compact('employers'));
    }


    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    //step 1
    public function createStepOne(Request $request)
    {
        $employer = $request->session()->get('employer');

        return view('Employer.Employer-auth.create-step-one', compact('employer'));
    }

    public function postStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'employer_first_name' => 'required',
            'employer_last_name' => 'required',
            'employer_phone' => 'required',
            'employer_gender' => 'required',


        ]);

        $employer = new Employer();
        $employer->fill($validatedData);
        $request->session()->put('employer', $employer);

        return redirect()->route('employer.create.step.two');
    }

    public function createStepTwo(Request $request)
    {
        $employer = $request->session()->get('employer');

        return view('Employer.Employer-auth.create-step-two', compact('employer'));
    }

    public function postStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'personal_email' => 'required|email|unique:employers',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        // Hash the password using the bcrypt algorithm
        $hashedPassword = bcrypt($validatedData['password']);

        // Get the employer data from the session
        $employer = $request->session()->get('employer');

        // Fill the employer data with the hashed password and other fields
        $employer->fill([
            'password' => $hashedPassword,
            'confirm_password' => null,
            'personal_email' => $validatedData['personal_email'], // Add the personal email field to the model
            // Remove the confirm password field from the model
            // Add any other fields that need to be filled
        ]);

        // Save the employer data to the database
        $createUser = $this->create($employer->toArray());

        // Check if the user was created successfully
        if ($createUser) {
            $token = Str::random(64);

            // Create a new verification record for the user
            UserVerify::create([
                'user_id' => $createUser->employer_auto_id,
                'token' => $token
            ]);

            Mail::send('email.emailVerificationEmail', ['token' => $token], function ($message) use ($validatedData) {
                $message->to($validatedData['personal_email']);
                $message->subject('Email Verification Mail');
            });
            Alert::success('Registered successful', 'You have registered successfully')
            ->persistent(true)
            ->autoClose(5000);
            // Redirect the user to the login page with a success message
            return redirect('employer-login')->withSuccess('Great! An email has been sent to your account please verify before login in');
      
        }
    }

    public function create(array $data)
    {
        return Employer::create([
            'employer_first_name' => $data['employer_first_name'],
            'employer_last_name' => $data['employer_last_name'],
            'employer_phone' => $data['employer_phone'],
            'employer_gender' => $data['employer_gender'],
            'personal_email' => $data['personal_email'],
            'password' => Hash::make($data['password'])
        ]);
    }




    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        return view('Employer.Employer-auth.employer-login');
    }


    public function loginUser(Request $request)
{

    $request->validate([
        'personal_email' => 'required|email',
        'password' => 'required|min:5',
    ]);

    $employer = Employer::where('personal_email', '=', $request->personal_email)->first();

    if ($employer) {
        if (Hash::check($request->password, $employer->password)) {
            Auth::login($employer);
            $request->session()->put('loginId', $employer->employer_auto_id);
            return view('Employer.employer-home');
        } else {
            return back()->with('fail', 'Incorrect password');
        }
    } else {
        return back()->with('fail', 'Invalid login details');
    }
}


    public function dashboard()
    {

        // check if user logged in
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect::to("employer-login")->withSuccess('Oopps! You do not have access please login again');
    }


    // ------------------- [ User logout function ] ----------------------

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $response = redirect()->to('/employer-login')->with('success', 'Logged out successfully.');

        // Add headers to prevent caching of the page
        $response->headers->set('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');

        return $response;
    }
    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();

        $message = 'Sorry your email cannot be identified.';

        if (!is_null($verifyUser) && !is_null($verifyUser->user)) {
            $user = $verifyUser->user;

            if (!$user->is_email_verified) {
                $user->is_email_verified = 1;
                $user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

        return redirect()->route('login')->with('message', $message);
    }
}
