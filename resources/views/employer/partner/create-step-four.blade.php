@extends('Employer.layout.app')

@section('content')
@include('header-links')
<div id="wrapper" class="toggle">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-5 h100">
        <div class="card mb-4">
          <div class="card-body pt-4 pl-0 pr-0 pb-5 ml-0 mr-0 mt-4 mb-0">
            <div class="row">
              <div class="col-lg-12 pl-5 pr-5 mb-3">
                <p class="text-secondary">4/5 Contact &nbsp; &nbsp;</p>
                <a href="#" style="text-decoration:none;">
                  <h3 class="card-title  line-height" style="color:#05115d;">Please provide any additional information<b></b></h3>
                </a>
                <br>
                <p class="card-text line-">Thank you for being in touch.If you have any additional information to share .Our team will contact you as soon as possible </p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-1 border-left">
        <div class="border-bottom d-none d-md-none d-sm-block"></div>
      </div>
      <div class="col-lg-6 pl-0 pr-0 mb-5">
        <form action="{{route('partner.post.step.four')}}" method="POST">
          @csrf
          <div class="card mb-4">
            <div class="card-body pt-4 pl-0 pr-0 pb-5 ml-0 mr-0 mt-4 mb-0">
              <div class="row">
                <div class="col-lg-12 pl-5 pr-5 mb-3">

                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">Please add a secondary contact person (optional) <span style="color:red">❤</span> </label>
                    <input class="form-control form-control-lg" type="tel" placeholder="" value="" name="contact">
                  </div>
                  <br>
                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">If you have any additional information or details that you would like to share with us, you can add a note (optional). <span style="color:red">❤</span></label>
                    <textarea name="add_note" class="form-control form-control-lg" id="" cols="20" rows="5"></textarea>
                  </div>



                  <div class="col-lg-12 text-end">
                    <a href="" class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border">Back</a>
                    &nbsp;&nbsp;

                    <button type="submit" class="btn rounded-pill btn-success"> Next: Submit</button>
                  </div>
                </div>
        </form>
      </div>
    </div>
  </div>
</div>
@include('footer-links')

@endsection