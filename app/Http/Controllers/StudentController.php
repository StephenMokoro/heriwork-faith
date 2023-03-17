<?php

namespace App\Http\Controllers;

use App\Models\Expressiontable;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Country;
use Illuminate\Support\Facades\Session;
use Hash;

use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{


    public function Index()
    {
        $products = Student::all();

        return view('student.student_details.college_choice', compact('products'));
    }
    public function DataAjax(Request $request)
    {
        $data = [];

        if ($request->has('q')) {
            $search = $request->q;
            $query = School::select("school_auto_id as id", "school_name as text")
                ->where('school_name', 'LIKE', "%$search%")
                ->limit(10)
                ->get();

            $data = $query->toArray();
        }
        return response()->json($data);
    }

    public function country_list(Request $request)
    {
        $data = [];
        if ($request->has('q')) {
            $search = $request->q;
            $query = Country::select("code as id", "name as text")
                ->where('name', 'LIKE', "%$search%")
                ->limit(10)
                ->get();

            $data = $query->toArray();
        }
        return response()->json($data);
    }

    public function college_choice(Request $request)
    {
        $product = $request->session()->get('product');

        return view('student.student_details.college_choice', compact('product'));
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Postcollegechoice(Request $request)
    {
        $validatedData = $request->validate([
            'school_name' => 'required',
        ]);

        if (empty($request->session()->get('product'))) {
            $product = new Student();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        } else {
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }

        return redirect()->route('student.student_country.post');
    }

    public function Student_country(Request $request)
    {
        $product = $request->session()->get('product');

        return view('student.student_details.student_country', compact('product'));
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function poststudentcountry(Request $request)
    {
        $validatedData = $request->validate([

            'country' => 'required',
        ]);

        if (empty($request->session()->get('product'))) {
            $product = new Student();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        } else {
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }

        return redirect()->route('student.personal_details');
    }
    public function Personal_details(Request $request)
    {
        $product = $request->session()->get('product');

        return view('student.student_details.studentpersonal_details', compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postpersonaldetail(Request $request)
    {
        $validatedData = $request->validate([
            'student_first_name' => 'required',
            'student_last_name' => 'required',
            'student_email' => 'required',
            'student_phone' => 'required',
            'student_gender' => 'required',

        ]);
        if (empty($request->session()->get('product'))) {
            $product = new Student();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        } else {
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }



        return redirect()->route('student.password_details.post');
    }

    public function Password_details(Request $request)
    {
        $product = $request->session()->get('product');

        return view('student.student_details.password_account', compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function Postpassworddetail(Request $request)
    {
        $validatedData = $request->validate([

            'password' => 'required',
            'confirm_password'  =>      'required|same:password',

        ]);

        $product = $request->session()->get('product');
        $product->fill($validatedData);
        $request->session()->put('product', $product);
        $product = $request->session()->get('product');
        $request->session()->forget('product');
        $product = $request->session()->get('product');
        $request->session()->forget('product');

        $product->save();
        if ($product) {

            Alert::success('Success', 'You\'ve successfully registered');
            return back();
        } else {
            Alert::error('Failed', 'Registration failed');
            return back();
        }
    }
    // login 
    public function login()
    {
        return view('student.student_details.student_login');
    }
    public function loginUser(Request $request)
    {

        $request->session()->put('current_time', date('H:i:s'));

        $request->validate([
            'student_email' => 'required|email|',
            'password' => 'required|min:5',
        ]);
        $student = Student::where('student_email', '=', $request->student_email)->first();
        if ($student) {
            $request->session()->put('loginId', $student->student_auto_id);
            return redirect('/studentdashboard');
        } else {
            return back()->with('fail', 'This password not correct');
        }
    }

    public function dashboard()
    {
        $data = array();

        if (Session::has('loginId')) {

            $data = Student::where('student_auto_id', Session::get('loginId'))->first();

            $current_time = date('H:i:s');
            $greeting = '';
            if ($current_time >= '00:00:00' && $current_time < '12:00:00') {
                $greeting = 'Good morning';
            } elseif ($current_time >= '12:00:00' && $current_time < '17:00:00') {
                $greeting = 'Good afternoon';
            } else {
                $greeting = 'Good evening';
            }
            Session::put('greeting', $greeting);


            return view('student.student_home', compact('data'));
        }





        // session(['greeting'=> $greeting]);
    }

    // }else {
    //     return  view('student.student_details.student_login);
    // }


    public function logout(Request $request)
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return  view('student.student_details.student_login');
        }
    }
}
