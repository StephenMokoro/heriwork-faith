<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\internship_job;
use Illuminate\Support\Facades\Storage;

class internshipController extends Controller
{

  /* Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index()
  {
    $posts = internship_job::orderBy('id', 'desc')->paginate(4);
    return view('employer.post.index', ['posts' => $posts]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create()
  {
    return view('employer.post.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @return IlluminateHttpResponse
   */
  public function store(Request $request)
  {
    $request->validate([
      'ijob_title' => 'required',
      'ijob_job_desc' => 'required',
      'ijob_categories' => 'required',
      'ijob_type' => 'required',

      'ijob_stipend' => 'required',
      'ijob_expected_start_date' => 'required',
      'ijob_expected_end_date' => 'required',
      'ijob_expected_daily_hours' => 'required',
    ]);

    $postData = [
      'employer_id' => $request->user()->employer_id,
      'ijob_title' => $request->ijob_title,
      'ijob_job_desc' => $request->ijob_job_desc,
      'ijob_stipend' => $request->ijob_stipend,
      'ijob_categories' => $request->ijob_categories,
      'ijob_type' => $request->ijob_type,
      'ijob_expected_start_date' => $request->ijob_expected_start_date,
      'ijob_expected_end_date' => $request->ijob_expected_end_date,
      'ijob_expected_daily_hours' => $request->ijob_expected_daily_hours,
    ];


    internship_job::create($postData);
    return redirect('/post')->with(['message' => 'Post added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function show(internship_job $post)
  {
    return view('employer.post.show', ['post' => $post]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function edit(internship_job $post)
  {
    return view('employer.post.edit', ['post' => $post]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, internship_job $post)
  {
    $postData = ['ijob_title' => $request->ijob_title, 'ijob_job_desc' => $request->ijob_job_desc, 'ijob_stipend' => $request->ijob_stipend, 'ijob_categories' => $request->ijob_categories, 'ijob_type' => $request->ijob_type, 'ijob_expected_start_date' => $request->ijob_expected_start_date, 'ijob_expected_end' => $request->ijob_expected_end_date, 'ijob_expected_daily_hours' => $request->ijob_expected_daily_hours];

    $post->update($postData);
    return redirect('/post')->with(['message' => 'Post updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function destroy(internship_job $post)
  {
    Storage::delete('public/images/' . $post->image);
    $post->delete();
    return redirect('/post')->with(['message' => 'Post deleted successfully!', 'status' => 'info']);
  }
}
