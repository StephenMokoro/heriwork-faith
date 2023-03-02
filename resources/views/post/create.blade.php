@extends('layout.app')
@section('title', 'Add New Post')
@section('link_text', 'Goto All Posts')
@section('link', '/post')
@section('content')



<section id="content">
    <!-- MAIN -->
    <main>
    <div class="table-data">
    <div class="order">
    <div class="head">
    <h3>Create Post</h3>

    </div>
    </div>
    </div>

    <div class="table-data">
    <div class="order">
    <div class="head">
    <h3>Job details</h3>
    <button class="btn " style="background-color:rgba(5, 17, 93, 0.9); color:white;"> <a href="{{url('index')}}"></a> View All</button>
    </div>
    <hr>
 <form action=" /post" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="col-md-12">
            <input type="text" name="ws_title" id="ws_title" class="form-control @error('ws_title') is-invalid @enderror" placeholder="Title" value="{{ old('ws_title') }}">
            @error('ws_title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <br>          <br>

          <div class="col-md-12">
            <select name="category" id="" class="form-control @error('ws_title') is-invalid @enderror" >
              <option value="#">Choose category</option>
              <option value="upcoming">Upcoming</option>
              <option value="ongoing">Ongoing</option>
            </select>
          </div>
          <br>          <br>
          
          <div class="col-md-12">
            <input type="number" name="ws_job_pay_per_hour" id="ws_job_pay_per_hour" class="form-control @error('ws_job_pay_per_hour') is-invalid @enderror" placeholder="pay per hour" value="{{ old('ws_job_pay_per_hour') }}">
            @error('ws_job_pay_per_hour')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <br>          <br>


          <div class="my-2">
            <input type="date" name="ws_job_expected_start_date" id="ws_job_expected_start_date" class="form-control @error('ws_job_expected_start_date') is-invalid @enderror" placeholder="pay per hour" value="{{ old('ws_job_expected_start_date') }}">
            @error('ws_job_expected_start_date')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <br>
          <br>

          <div class="my-2">
            <input type="date" name="ws_job_expected_end_date" id="ws_job_expected_end_date" class="form-control @error('ws_job_expected_end_date') is-invalid @enderror" placeholder="pay per hour" value="{{ old('ws_job_expected_end_date') }}">
            @error('ws_job_expected_end_date')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <br>
          <br>
          <div class="col-md-12">
          <textarea name="ws_job_desc" id="description" rows="6" class="form-control @error('ws_job_desc') is-invalid @enderror" placeholder="work-study job description" value="{{ old('ws_job_desc') }}">{{ old('ws_job_desc') }}</textarea>
            @error('ws_job_desc')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <br><br>
          <div class="my-2">
            <input type="submit" value="Add Post" class="btn btn-primary">
          </div>
        </form>
    
    </div>
  
    </div>
    </main>
    <!-- MAIN -->
    </section>

@endsection