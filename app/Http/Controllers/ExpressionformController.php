<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expressionform;
use RealRashid\SweetAlert\Facades\Alert;
class ExpressionformController extends Controller
{
    //
    public function expression()
    {
        return view('Student.Student-auth.Expression-form');
    }

    public function expressionpage(Request $request)
    {
        $request->validate([
            'school_name'         =>      'required',

            'student_first_name'        =>      'required',
            'student_last_name'        =>      'required',


            'student_email'             =>      'required|email',
            'student_phone'        =>      'required',

        ]);
        $expression = new Expressionform();
        $expression->school_name = $request->school_name;

        $expression->student_first_name = $request->student_first_name;
        $expression->student_last_name = $request->student_last_name;

        $expression->student_email = $request->student_email;
        $expression->student_phone = $request->student_phone;
        $res =  $expression->save();
        if ($res) {
            Alert::success('Success', 'Thankyou for adding your school . You will be contacted soon 😊 ');

            return back();
        } else {
            Alert::error('Failed', 'Please try again');

            return back();
        }
    }
}
