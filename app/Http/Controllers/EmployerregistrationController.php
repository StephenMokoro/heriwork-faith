<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\Employer;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;


class EmployerregistrationController extends Controller
{
    //
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Employer::all();

        return view('employer.employer_details.create-step-one', compact('products'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    //step 1
    public function createStepOne(Request $request)
    {
        $product = $request->session()->get('product');

        return view('employer.employer_details.create-step-one', compact('product'));
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'employer_first_name' => 'required',
            'employer_last_name' => 'required',
            'employer_phone' => 'required',
            'personal_email' => 'required|email|unique:employers',



        ]);

        if (empty($request->session()->get('product'))) {
            $product = new Employer();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        } else {
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }

        return redirect()->route('employer.create.step.two');
    }


    //step 2
    public function createStepTwo(Request $request)
    {
        $product = $request->session()->get('product');

        return view('employer.employer_details.create-step-two', compact('product'));
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'password' => 'required',
            'confirm_password'  =>      'required|same:password',


        ]);

        if (empty($request->session()->get('product'))) {
            $product = new Employer();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        } else {
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }

        return view('employer/employer_details/employer_login');
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
    public function login(){
        return view('employer.employer_details.employer_login');
    }
    public function loginUser(Request $request)
    {
        $request->validate([


            'personal_email' => 'required|email|',

            'password' => 'required|min:5',



        ]);
        $employer = Employer::where('personal_email', '=', $request->personal_email)->first();
        if ($employer) {

            $request->session()->put('loginId', $employer->employer_auto_id);
            return redirect('dashboard');
        } else {
            return back()->with('fail', 'This password not correct');
        }
    }

    public function dashboard()
    {
        $data = array();
        if (Session::has('loginId')) {

            $data = Employer::where('employer_auto_id', Session::get('loginId'))->first();
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
