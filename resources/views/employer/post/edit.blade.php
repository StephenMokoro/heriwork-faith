@extends('layout.app')
@section('title', 'Edit Post')
@section('heading', 'Edit This Post')
@section('link_text', 'Goto All Posts')
@section('link', '/post')

@section('content')

<div class="container-fluid">
  <div class="container-fluid">
    <form action="/post/{{ $post->id }}" method="POST" enctype="multipart/form-data">

      @csrf
      @method('PUT')
      <div class="card">
        <div class="card-header">
          <h4 class="card-title line-height-36">Create Job</h4>

          </button>
        </div>
      </div>
      
      <div class="row">
      <br><br>
        <div class="col-6">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Job Details</div>
            </div>

            <div class="card-body">
              <div class="row form-group">
                <div class="col-12">
                  <label for="">Job title</label>
                  <input type="text" name="ijob_title" id="ijob_title" class="form-control" placeholder="Job title" value="{{ $post->ijob_title }}" required>
                </div>
              </div>
              <br> <br>

              <div class="row form-group">
                <div class="col-md-12">
                <label for="">Internship stipend</label>
                  <input type="text" name="ijob_stipend" id="ijob_stipend" class="form-control" placeholder="Job stipend" value="{{ $post->ijob_stipend }}" required>
                </div>
              </div>
              <br> <br>

              <div class="row form-group">
                <div class="col-sm-12 col-md-6">
                  <label for="">Job category</label>
                  <select name="ijob_categories" id="" class="form-control" value="{{ $post->ijob_categories }}">
                    <option value="">Choose job category</option>
                    <option value="Upcoming">Upcoming</option>
                    <option value="Ongoing">Ongoing</option>

                  </select>
                </div>
                <br><br>

                <div class="col-sm-12 col-md-6">
                  <label for="">Job type</label>
   
                  <select name="ijob_type" id="" class="form-control" value="{{ $post->ijob_type }}">
                    <option value="#">Choose job type</option>
                    <option value="Upcoming">Work study</option>
                    <option value="Ongoing">Internship</option>

                  </select>

                </div>
                <br><br>
              </div>

            </div>


          </div>


        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Job Details</div>
            </div>
            <div class="card-body">
              <div class="row form-group">
                <div class="col-12">
                  <label for="">Expected daily hours</label>
                  <input type="text" name="ijob_expected_daily_hours" id="ijob_expected_daily_hours" class="form-control" placeholder="Expected daily hours" value="{{ $post->ijob_expected_daily_hours }}" required>
                </div>
              </div>
              <br> <br>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="">Expected start Date</label>
                  <input type="date" name="ijob_expected_start_date" id="ijob_expected_start_date" class="form-control" placeholder="Expected start date" value="{{ $post->ijob_expected_start_date }}" required>
                </div>
              </div>
              <br> <br>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="">Expected end date</label>
                  <input type="date" name="ijob_expected_end_date" id="ijob_expected_end_date" class="form-control @error('ijob_expected_end_date') is-invalid @enderror" placeholder="Expected end date" value="{{ old('ijob_expected_end_date') }}">

                </div>
              </div>

            </div>


          </div>


        </div>
        <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Description</div>
                </div>
                <div class="card-body">
                  <div class="row form-group">
                    <div class="col-12">
                      <label for="description">
                       Description 
                      </label>
                      <textarea name="ijob_job_desc"  rows="6" class="form-control @error('ijob_job_desc') is-invalid @enderror" placeholder="Internship job description" value="{{ old('ijob_job_desc') }}">{{ old('ijob_job_desc') }}</textarea>

                    </div>
                  </div>
                </div>
              </div>
        </div>



















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