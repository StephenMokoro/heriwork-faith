<?php

namespace App\Http\Controllers;

use App\Models\Workstudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class workstudyController extends Controller {
  
  /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $workstudies = Workstudy::orderBy('workstudy_id', 'desc')->paginate(5);
    return view('post.index', ['workstudies' => $workstudies]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create() {
    return view('post.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @return IlluminateHttpResponse
   */
  public function store(Request $request) {
    $request->validate([
      'ws_title' => 'required',
      'ws_job_desc'=>'required|min:50',
      'ws_job_pay_per_hour' => 'required',
      'ws_job_expected_start_date'=>'required',
      'ws_job_expected_end_date'=>'required',

        ]);
    $workstudyData = ['employer_id'=>$request->employer_id,'ws_title' => $request->ws_title, 'ws_job_desc'=>$request->ws_job_desc,'ws_job_pay_per_hour'=>$request->ws_job_pay_per_hour,'ws_job_expected_start_date'=>$request->ws_job_expected_start_date,'ws_job_expected_end_date'=>$request->ws_job_expected_end_date];

    Workstudy::create($workstudyData);
    return redirect('/post')->with(['message' => 'Post added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function show(Workstudy $workstudy) {
    return view('post.show', ['workstudy' => $workstudy]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function edit(Workstudy $workstudy) {
    return view('post.edit', ['workstudy' => $workstudy]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, Workstudy $workstudy) {
    $workstudyData = ['ws_title' => $request->ws_title, 'ws_job_desc'=>$request->ws_job_desc,'ws_job_pay_per_hour'=>$request->ws_job_pay_per_hour,'ws_job_expected_start_date'=>$request->ws_job_expected_start_date,'ws_job_expected_end_date'=>$request->ws_job_expected_end_date];

    $workstudy->update($workstudyData);
    return redirect('/post')->with(['message' => 'Post updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function destroy(Workstudy $workstudy) {
    $workstudy->delete();
    return redirect('/post')->with(['message' => 'Post deleted successfully!', 'status' => 'info']);
  }
}