<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\School;
use App\Models\Country;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Mail;
use Hash;
use DB;
use App\Models\StudentVerify;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('Student.student-auth.college-choice', compact('students'));
    }

    public function dataAjax(Request $request)
    {
        //school selection
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
        //country selrction
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

        $selectedCountry = $validatedData['country'];
        session(['selectedCountry' => $selectedCountry]);

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
        $messages = [
            'student_email.ends_with' => 'Only .edu and ac.ke email addresses are allowed.',
        ];
        $validatedData = $request->validate([
            'student_email' => 'required|email|unique:students|ends_with:edu,ac.ke|unique:students,student_email',

            'password' => 'required',
            'confirm_password' => 'required|same:password',

        ], $messages);
        $hashedPassword = bcrypt($validatedData['password']);

        // Get the employer data from the session
        $student = $request->session()->get('student');

        // Fill the employer data with the hashed password and other fields
        $student->fill([
            'password' => $hashedPassword,
            'confirm_password' => null,
            'student_email' => $validatedData['student_email'], // Add the personal email field to the model
            // Remove the confirm password field from the model
            // Add any other fields that need to be filled
        ]);

        // Save the employer data to the database
        $createUser = $this->create($student->toArray());

        // Check if the user was created successfully
        if ($createUser) {
            $token = Str::random(64);

            // Create a new verification record for the user
            StudentVerify::create([
                'user_id' => $createUser->student_auto_id,
                'token' => $token
            ]);

            Mail::send('email.studentemailVerificationEmail', ['token' => $token], function ($message) use ($validatedData) {
                $message->to($validatedData['student_email']);
                $message->subject('Email Verification Mail');
            });
            Alert::success('Registration successful', 'You have registered successfully')
                ->persistent(true)
                ->autoClose(5000);
            // Redirect the user to the login page with a success message
            return redirect('student-login')->withSuccess('Great! An email has been sent to your account please verify before login in');
        }
    }

    public function create(array $data)
    {
        return Student::create([
            'student_first_name' => $data['student_first_name'],
            'student_last_name' => $data['student_last_name'],
            'student_phone' => $data['student_phone'],
            'student_gender' => $data['student_gender'],
            'student_email' => $data['student_email'],
            'school_name' => $data['school_name'],
            'country' => $data['country'],
            'password' => Hash::make($data['password'])
        ]);
    }



    public function verifyAccount($token)
    {
        $verifyUser = StudentVerify::where('token', $token)->first();

        $message = 'Sorry your email cannot be identified.';

        if (!is_null($verifyUser) && !is_null($verifyUser->user)) {
            $user = $verifyUser->user;

            if (!$user->student_email_verified) {
                $verifyUser->user->student_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

        return redirect()->route('student-login')->with('message', $message);
    }



    // // // login \\

    public function login()
    {
        return view('Student.student-auth.student-login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'student_email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        $student = Student::where('student_email', '=', $request->student_email)->first();

        if ($student) {
            if (Hash::check($request->password, $student->password)) {
                Auth::login($student);
                $request->session()->put('loginId', $student->student_auto_id);
                return view('Student.student-home');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        } else {
            return back()->with('fail', 'Invalid login details');
        }
    }


    public function dashboard()
    {
        $data = array();

        if (Session::has('loginId')) {

            $data = Student::where('student_auto_id', Session::get('loginId'))->first();
            ///checks current time
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


    //logout function

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $response = redirect()->to('/student-login')->with('success', 'Logged out successfully.');

        // Add headers to prevent caching of the page
        $response->headers->set('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');

        return $response;
    }

    // forgot password section
    public function showForgetPasswordForm()
    {
        return view('Student.student-auth.forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'student_email' => 'required|email|exists:students',
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'student_email' => $request->student_email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('email.studentforgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->student_email);
            $message->subject('Reset Password');
        });
        Alert::success('Sent email', 'We have e-mailed your password reset link!')
            ->persistent(true)
            ->autoClose(5000);
        // Redirect the user to the login page with a success message

        return back();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($token)
    {
        return view('student.student-auth.forgetPasswordLink', ['token' => $token]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'student_email' => 'required|email|exists:students',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                'student_email' => $request->student_email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = Student::where('student_email', $request->student_email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_reset_tokens')->where(['student_email' => $request->student_email])->delete();

        return redirect('student-login')->with('message', 'Your password has been changed!');
    }


    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.student-auth.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->student_first_name = $request->input('student_first_name');
        $student->student_last_name = $request->input('student_last_name');
        $student->update();
        return redirect()->back()->with('status', 'Student Updated Successfully');
    }
}
