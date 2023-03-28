@extends('Employer.layout.app')

@section('content')
<style>
  .intl-tel-input {
    display: table-cell;
    width: 100% !important;


  }

  .intl-tel-input .selected-flag {
    z-index: 4;
  }

  .intl-tel-input .country-list {
    z-index: 5;

  }
</style>

@include('header-links')
<div id="wrapper" class="toggle">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-5 h100">
        <div class="card mb-4">
          <div class="card-body pt-4 pl-0 pr-0 pb-5 ml-0 mr-0 mt-4 mb-0">
            <div class="row">
              <div class="col-lg-12 pl-5 pr-5 mb-3">
                <p class="text-secondary">1/5 &nbsp; &nbsp;Collaboration</p>
                <a href="#">
                  <h3 class="card-title  line-height" style="color:#05115d;"><b>Thank you for your interest in partnering with us. </b></h3>
                </a>
                <br>
                <p class="card-text line-">We are excited to collaborate with you to create programs that align with your organization's goals and principles. These programs will aim to assist young individuals in your community. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-1 border-left">
        <div class="border-bottom d-none d-md-none d-sm-block">
          
        </div>
      </div>
      <div class="col-lg-6 pl-0 pr-0 mb-5">
        <form action="{{route('partner.post.step.one')}}" method="POST">
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
                    <label class="text-black" style="font-weight: 600;">Enter your first name<span style="color:red;">*</span></label>
                    <input class="form-control form-control-lg" type="text" placeholder="" value="{{ $product->partner_first_name ?? '' }}" name="partner_first_name">
                  </div>
                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">Enter your last name<span style="color:red;">*</span></label>
                    <input class="form-control form-control-lg" type="text" placeholder="" value="{{ $product->partner_last_name ?? '' }}" name="partner_last_name">
                  </div>
                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">Enter your email address<span style="color:red;">*</span></label>
                    <input class="form-control form-control-lg" type="email" placeholder="" value="{{ $product->partner_email ?? '' }}" name="partner_email">
                  </div>
                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">Enter your phone number<span style="color:red;">*</span></label>

                    <input id="telephone-input" type="tel " class="form-control form-control-lg" style="width:100%!important; " value="{{ $product->partner_phone ?? '' }}" placeholder="712219585" name="partner_phone">

                  </div>
                  <br>
                  <div class="form-group">
                    <label for="" style="font-weight: 600;">Select your country of origin</label>
                    <br>
                    <select id="" class="countryName form-control" name="country"></select>
                    <!-- <input type="text" name="school_name" id="selected_value" hidden> -->
                  </div>

                  <div class="col-lg-12 text-end">
                    <button type="submit" class="btn rounded-pill btn-success">Next: Partner as </button>
                  </div>

                </div>

        </form>
      </div>
    </div>
  </div>
</div>

@include('footer-links')
<script>
  $("#telephone-input").intlTelInput({
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
  });
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script>
  $('.countryName').select2({

    placeholder: 'Select origin country',
    ajax: {
      url: 'country-list',
      dataType: 'json',
      delay: 250,
      data: function(data) {
        return {
          q: data.term
        }
      },
      processResults: function(data) {
        return {
          results: data
        };
      },
      cache: true
    }
  });
</script>

@endsection