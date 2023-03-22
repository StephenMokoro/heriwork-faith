<?php
namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\School;
use App\Models\Country;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('Student.student-auth.college-choice', compact('students'));
    }

    public function dataAjax(Request $request)
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

    public function countryList(Request $request)
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

    public function collegeChoice(Request $request)
    {
        $student = $request->session()->get('student');

        return view('Student.student-auth.college-choice', compact('student'));
    }

    public function postCollegechoice(Request $request)
    {
        $validatedData = $request->validate([
            'school_name' => 'required',
        ]);

        $student = $request->session()->get('student', new Student());
        $student->fill($validatedData);
        $request->session()->put('student', $student);

        return redirect()->route('student.student_country.post');
    }

    public function studentCountry(Request $request)
    {
        $student = $request->session()->get('student');

        return view('Student.student-auth.student-country', compact('student'));
    }

    public function poststudentcountry(Request $request)
    {
        $validatedData = $request->validate([
            'country' => 'required',
        ]);

        $student = $request->session()->get('student', new Student());
        $student->fill($validatedData);
        $request->session()->put('student', $student);

        return redirect()->route('student.personal_details');
    }

    public function PersonalDetails(Request $request)
    {
        $student = $request->session()->get('student');

        return view('Student.student-auth.personal-details', compact('student'));
    }

    public function postpersonaldetail(Request $request)
    {
        $validatedData = $request->validate([
            'student_first_name' => 'required',
            'student_last_name' => 'required',
            'student_email' => 'required',
            'student_phone' => 'required',
            'student_gender' => 'required',
        ]);

        $student = $request->session()->get('student', new Student());
        $student->fill($validatedData);
        $request->session()->put('student', $student);
        return redirect()->route('student.password_details.post');

       

    }

    public function PasswordDetail(Request $request)
    {
        $student = $request->session()->get('student');

        return view('Student.student-auth.secure-account', compact('student'));
    }

    public function Postpassworddetail(Request $request)
    {
        $validatedData = $request->validate([
            'password' => 'required',
            'confirm_password' => 'required|same:password',

        ]);
        $hashedPassword = bcrypt($validatedData['password']);

        $student = $request->session()->get('student', new Student());

        $student->fill([
            'password' => $hashedPassword,
            'confirm_password' => null, // Remove the confirm password field from the model
        ]);

        $request->session()->put('student', $student);

        $student->save();

        if ($student) {
            Alert::success('Registration successful', 'You have successfully registered.')->persistent(true);

            // Redirect the user to the login page with a success message
            return redirect('studentlogin')->with('success', 'You have successfully registered.');
        } else {
            return back();
        }
    }

    // // // login 
    public function login()
    {
        return view('Student.student-auth.student-login');
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


            return view('student.student-home', compact('data'));
        }


    }


    // //     // session(['greeting'=> $greeting]);
    // }

    // // // }else {
    // // //     return  view('student.student_details.student_login);
    // // // }


    public function logout(Request $request)
    {
        $request->session()->forget('loginId');
        return redirect('studentlogin')->with('success', 'Logged out successfully.');
    }
    
}
