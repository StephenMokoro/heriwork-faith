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
            'personal_email' => 'required|email|unique:employers',
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
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        // Hash the password using the bcrypt algorithm
        $hashedPassword = bcrypt($validatedData['password']);

        // Get the employer data from the session
        $employer = $request->session()->get('employer');

        // Fill the employer data with the hashed password
        $employer->fill([
            'password' => $hashedPassword,
            'confirm_password' => null, // Remove the confirm password field from the model
            // Add any other fields that need to be filled
        ]);

        // Save the employer data to the database
        $employer->save();

        // Remove the employer data from the session
        $request->session()->forget('employer');

        // Check if the employer was saved to the database
        if ($employer) {
            Alert::success('Registration successful', 'You have successfully registered.')->persistent(true);

            // Redirect the user to the login page with a success message
            return redirect('employerlogin')->with('success', 'You have successfully registered.');
        } else {
            // Redirect the user back to the form with an error message
            return back()->with('error', 'Registration failed.');
        }
    }


    //step 3


    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */



    // public function createStepThree(Request $request)
    // {
    //     $product = $request->session()->get('product');

    //     return view('employer.employer_details.create-step-three', compact('product'));
    // }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    // public function postCreateStepThree(Request $request)
    // {
    //     $product = $request->session()->get('product');

    //     $request->session()->forget('product');
    //     if ($product) {
    //         $product->save();
    //         Alert::success('Success', 'You\'ve Successfully posted');
    //         return redirect()->route('login-user');
    //     } else {
    //         Alert::error('Failed', 'Registration failed');
    //         return back();
    //     }
    // }
    public function login()
{
    return view('Employer.Employer-auth.employer-login');
}

public function loginUser(Request $request)
{
    $request->validate([
        'personal_email' => 'required|email|',
        'password' => 'required|min:5',
    ]);

    $employer = Employer::where('personal_email', '=', $request->personal_email)->first();

    if ($employer) {
        // Use Laravel's built-in check method to compare the submitted password to the hashed password in the database
        if (Hash::check($request->password, $employer->password)) {
            $request->session()->put('loginId', $employer->employer_auto_id);
            return redirect()->route('dashboard');
        } else {
            return back()->with('fail', 'Incorrect password');
        }
    } else {
        return back()->with('fail', 'No user found with this email');
    }
}

public function dashboard()
{
    $loginId = session()->get('loginId');

    $employer = Employer::find($loginId);

    return view('Employer.employer-dashboard', compact('employer'));
}

    
public function logout(Request $request)
{
    $request->session()->forget('loginId');
    return redirect('/employerlogin')->with('success', 'Logged out successfully.');
}

    
}
