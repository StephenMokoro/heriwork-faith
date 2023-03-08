@extends('layout.app')
@section('title', 'Home Page')
@section('heading', 'All Posts')
@section('link_text', 'Add New Post')
@section('link', '/post/create')

@section('content')


@if(session('message'))
<div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
  <strong>{{ session('message') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container">
  <div class="row ">

    <h3>Posted Jobs</h3>
    @forelse($posts as $key => $row)
    <div class="col-lg-6 mb-5">
      <div class="card mb-4">
        <div class="card-body pt-4  pb-5 ml-0 mr-0 mt-4 mb-0 ">
          <div class="row  pl-5 pr-5  ml-5 mr-5">
            <div class="col-lg-12 pl-5 pr-5 mb-3">
              <span><b>
                  <a href="post/{{ $row->id }}">
                    <h3 class="card-title text-black un_ mt-5 line-height"><b>{{ $row->ijob_categories}}</b> </h3>
                  </a>
                </b></span>
            </div>
            <div class="col-lg-12 pl-5 pr-5">
              <a href="#">
                <h4 class="card-title text-black line-height"><b>{{$row->ijob_title}}</b></h4>
              </a>
              
              <p class="card-text line-height">{!! Str::limit( $row->ijob_job_desc , 200) !!} </p>
              <div class="bg- pb-2 pr-4">
                <div class="row">
                  <div class="col-lg-3 col-sm-4 p-0">
                    <h5 class="mt-2">   <a class="btn btn-info text-white rounded-pill" href="post/{{ $row->id }}"><b>View More</b></a></h5>
                  </div>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @empty
    <h2 class="text-center text-secondary p-4">No post found in the database!</h2>
    @endforelse
    <div class="d-flex justify-content-center my-5">
      {{ $posts->onEachSide(1)->links() }}
    </div>

  </div>
</div>

</div>
</div>





@endsection