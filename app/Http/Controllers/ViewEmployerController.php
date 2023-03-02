<?php

namespace App\Http\Controllers;
use App\Models\Employer;
use Illuminate\Http\Request;

class ViewEmployerController extends Controller
{

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $employers = Employer::orderBy('employer_id','desc')->paginate(5);
        return view('auth.employer.index',compact('employers'));
    
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
    public function show(Employer $employer)
    {
        return view('auth.employer.show',compact('employers'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function edit(Employer $employer)
    {
        return view('auth.employer.edit',compact('employers'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request,Employer $employer)
    {
        $request->validate([
           
            'employer_first_name' => 'required',
            
            'org_email' => 'required',


        ]);
        
        $employer->fill($request->post())->save();

        return back()->with('success','Company Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(Employer $employer)
    {
        $employer->delete();
        return back() ->with('success','Company has been deleted successfully');
    }
}