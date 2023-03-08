@extends('layout.app')
@section('title', 'Post Details')
@section('heading', 'Post Details')
@section('link_text', 'Goto All Posts')
@section('link', '/post')

@section('content')


<br><br><br>
<div class="row my-4">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-body p-5">
        <div class="d-flex justify-content-between align-items-center">
          <p class="btn btn-dark rounded-pill">{{ $post->ijob_categories}}</p>
          <p class="lead">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
        </div>

        <hr>
        <div class="d-flex justify-content-between">
       <p>Expected daily hours &nbsp;  {{ $post->ijob_expected_daily_hours}}</p></p>
        </div>
        <h3 class="fw-bold text-primary">{{ $post->ijob_title }}</h3>
        <p>{!! $post->ijob_job_desc !!}</p>
        <p> <span style="color:red;">Start date:</span>  {{ $post->ijob_expected_start_date}}</p>
        <p> <span style="color:red;">End date:</span>  {{ $post->ijob_expected_end_date}}</p>

      </div>
      <div class="card-footer px-5 py-3 d-flex justify-content-end">
        <a href="/post/{{$post->id}}/edit" class="btn btn-success rounded-pill me-2">Edit</a>
        <form action="/post/{{$post->id}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger rounded-pill">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>