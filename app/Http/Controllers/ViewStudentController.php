<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class ViewStudentController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $students = Student::orderBy('student_id','desc')->paginate(5);
        return view('auth.student.index', compact('students'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    
    /**
    * Display the specified resource.
    *
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function show(Student $student)
    {
        return view('auth.student.show',compact('student'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function edit(Student $student)
    {
        return view('auth.student.edit',compact('student'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Student $student)
    {
        $request->validate([
           
            'student_first_name' => 'required',
            
            'student_email' => 'required',


        ]);
        
        $student->fill($request->post())->save();

        return back()->with('success','Company Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(Student $student)
    {
        $student->delete();
        return back() ->with('success','Company has been deleted successfully');
    }
}