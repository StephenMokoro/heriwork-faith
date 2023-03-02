<?php

namespace App\Http\Controllers;

use App\Models\workstudy;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**             `
     * Display a listing of the resource.
     *
     * @return IlluminateHttpResponse
     */
    public function index()
    {
        $posts = workstudy::orderBy('id', 'desc')->paginate(2);
        return view('index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return IlluminateHttpResponse
     */
    public function create()
    {
        return view('create');
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
            'title' => 'required',
            'description' => 'required|min:50',
            'skills' => 'required',
            'category' => 'required',
            'daily_hours' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);


        $postData = ['title' => $request->title,'skills' => $request->skills, 'category' => $request->category,'description' => $request->description,  'daily_hours' =>$request->daily_hours,'start_date' =>$request->start_date,'end_date' =>$request->end_date];

        workstudy::create($postData);
        return redirect('/post')->with(['message' => 'Post added successfully!', 'status' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  AppModelsPost  $post
     * @return IlluminateHttpResponse
     */
    public function show(workstudy $post)
    {
        return view('show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  AppModelsPost  $post
     * @return IlluminateHttpResponse
     */
    public function edit(workstudy $post)
    {
        return view('edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  IlluminateHttpRequest  $request
     * @param  AppModelsPost  $post
     * @return IlluminateHttpResponse
     */
    public function update(Request $request, workstudy $post)
    {
        

        $postData = ['title' => $request->title,'description' => $request->description, 'skills' => $request->skills,'category' => $request->category, 'content' => $request->content, 'daily_hours' =>$request->daily_hours,'start_date' => $request->start_date,'end_date' => $request->end_date];

        $post->update($postData);
        return redirect('/post')->with(['message' => 'Post updated successfully!', 'status' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  AppModelsPost  $post
     * @return IlluminateHttpResponse
     */
    public function destroy(workstudy $post)
    {
        
        $post->delete();
        return redirect('/post')->with(['message' => 'Post deleted successfully!', 'status' => 'info']);
    }
}
