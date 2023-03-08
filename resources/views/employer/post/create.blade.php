@extends('layout.app')

@section('title', 'Add New Post')
@section('link_text', 'Goto All Posts')
@section('link', '/post')
@section('content')


<div class="container-fluid">
  <div class="container-fluid">
    @if($errors->any())
    <div class="alert alert-danger alert-dismissable fade show">
      <strong>{{$errors->first()}}</strong>
      <button class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <form action="/post" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" value="inactive" name="ijob_pay_status">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title line-height-36">Create Job</h4>
          </button>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Job Details</div>
            </div>
            <div class="card-body">
              <div class="row form-group">
                <div class="col-12">
                  <label for="">Job title</label>
 
                  <input type="text" name="ijob_title" id="ijob_title" class="form-control @error('ijob_title') is-invalid @enderror" placeholder="Internship title" value="{{ old('ijob_title') }}">
                  @error('ijob_title')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror

                </div>
              </div>
              <br><br>
              <div class="row form-group">
                <div class="col-md-12">
                  <label for="">Job stipend</label>
                  <input type="number" name="ijob_stipend" id="ijob_stipend" class="form-control @error('ijob_stipend') is-invalid @enderror" placeholder="Internship stipend" value="{{ old('ijob_stipend') }}">
                  @error('ijob_stipend')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>


              <br> <br>
              <div class="row form-group">
                <div class="col-sm-12 col-md-6">
                  <label for="">Category</label>
                  <select name="ijob_categories" id="" class="form-control @error('ijob_categories') is-invalid @enderror" placeholder="Internship stipend" value="{{ old('ijob_stipend') }}">
                    <option value="#">Choose category</option>
                    <option value="upcoming">Upcoming</option>
                    <option value="ongoing">Ongoing</option>
                  </select>
                </div>
                <div class="col-sm-12 col-md-6">
                  <label for="">Job type</label>
                  <select name="ijob_type" id="" class="form-control @error('ijob_type') is-invalid @enderror" placeholder="Internship stipend" value="{{ old('ijob_type') }}">
                    <option value="#">Choose the type of job </option>
                    <option value="upcoming">workstudy</option>
                    <option value="ongoing">internship</option>
                  </select>
                </div>
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
                  <label for="">Daily hours</label>
  
                  <input type="number" name="ijob_expected_daily_hours" id="ijob_expected_daily_hours" class="form-control @error('ijob_expected_daily_hours') is-invalid @enderror" placeholder="Expected daily hours" value="{{ old('ijob_expected_daily_hours') }}">
                  @error('ijob_expected_daily_hours')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror

                </div>
              </div>
              <br><br>
           
              <div class="row form-group">
                <div class="col-sm-12 col-md-6">
                  <label for="">Start date</label>
                <input type="date" name="ijob_expected_start_date" id="ijob_expected_start_date" class="form-control @error('ijob_expected_start_date') is-invalid @enderror" placeholder="Expected start date" value="{{ old('ijob_expected_start_date') }}">
                  @error('ijob_expected_start_date')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-12 col-md-6">
                  <label for="">End date</label>
                <input type="date" name="ijob_expected_end_date" id="ijob_expected_end_date" class="form-control @error('ijob_expected_end_date') is-invalid @enderror" placeholder="Expected end date" value="{{ old('ijob_expected_end_date') }}">
                  @error('ijob_expected_end_date')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
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
                      <textarea name="ijob_job_desc" id="description" rows="6" class="form-control @error('ijob_job_desc') is-invalid @enderror" placeholder="Internship job description" value="{{ old('ijob_job_desc') }}">{{ old('ijob_job_desc') }}</textarea>

                    </div>
                  </div>
                </div>
              </div>
        </div>
        </div>
        <div class="my-2">
                  <input type="submit" value="Add Post" class="btn btn-primary">
                </div>
      </div>
    </form>
  </div></div>

              
  </main>
  <!-- MAIN -->
  </section>

  @endsection