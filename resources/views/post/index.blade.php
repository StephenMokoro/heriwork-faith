@extends('layout.app')
@section('title', 'Home Page')
@section('heading', 'All Posts')
@section('link_text', 'Add New Post')
@section('link', 'post/create')
@section('content')

@if(session('message'))
<div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
  <strong>{{ session('message') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row g-4 mt-1">
  @forelse($workstudies as $key => $row)
  <div class="col-lg-4">

      <div class="card shadow">
        <a href="post/{{ $row->workstudy_id }}">
        </a>
        <div class="card-body">
          <p class="btn btn-success rounded-pill btn-sm">{{ $row->ws_title }}</p>
          <div class="card-title fw-bold text-primary h4">{{ $row->ws_job_pay_per_hour  }}</div>
          <p class="text-secondary">{!! Str::limit($row->ws_job_desc, 100) !!}</p>
        </div>
      </div>

  </div>
  @empty
    <h2 class="text-center text-secondary p-4">No post found in the database!</h2>
  @endforelse
  <div class="d-flex justify-content-center my-5">
    {{ $workstudies->onEachSide(1)->links() }}
  </div>

</div>

@endsection