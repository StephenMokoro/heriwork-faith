@extends('layout.app')

@section('title', 'Edit Post')
@section('heading', 'Edit This Post')
@section('link_text', 'Goto All Posts')
@section('link', '/post')

@section('content')

<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Edit Post</h3>
      </div>
      <div class="card-body p-4">
        <form action="/post/{{ $workstudy->workstudy_id }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="my-2">
            <input type="text" name="ws_title" id="title" class="form-control" placeholder="Title" value="{{ $workstudy->ws_title }}" required>
          </div>

          <div class="my-2">
            <input type="text" name="ws_job_desc" id="ws_job_desc" class="form-control" placeholder="Description" value="{{ $workstudy->ws_job_desc }}" required>
          </div>

          
          <div class="my-2">
          <input type="date" name="ws_job_expected_start_date" id="ws_job_expected_start_date" class="form-control" placeholder="Start date" value="{{ $workstudy->ws_job_expected_start_date }}" required>

          </div>

          <div class="my-2">
            <input type="submit" value="Update Post" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection