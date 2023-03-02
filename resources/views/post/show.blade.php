@extends('layout.app')

@section('title', 'Post Details')
@section('heading', 'Post Details')
@section('link_text', 'Goto All Posts')
@section('link', '/post')

@section('content')

<div class="row my-4">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-body p-5">
        <div class="d-flex justify-content-between align-items-center">
          <p class="btn btn-dark rounded-pill">{{ $workstudy->ws_title }}</p>
          <p class="lead">{{ \Carbon\Carbon::parse($workstudy->created_at)->diffForHumans() }}</p>
        </div>

        <hr>
        <h3 class="fw-bold text-primary">{{ $workstudy->ws_job_desc }}</h3>
        <p>{{ $workstudy->ws_title }}</p>
      </div>
      <div class="card-footer px-5 py-3 d-flex justify-content-end">
        <a href="/post/{{$workstudy->workstudy_id}}/edit" class="btn btn-success rounded-pill me-2">Edit</a>
        <form action="/post/{{$workstudy->workstudy_id}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger rounded-pill">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection