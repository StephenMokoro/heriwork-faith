@extends('Employer.layout.app')
@section('content')

<div id="wrapper" class="toggle">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-5 h100">
        <div class="card mb-4">
          <div class="card-body pt-4 pl-0 pr-0 pb-5 ml-0 mr-0 mt-4 mb-0">
            <div class="row">
              <div class="col-lg-12 pl-5 pr-5 mb-3">
                <p class="text-secondary">1/2 &nbsp; &nbsp;Welcome</p>
                <a href="#">
                  <h3 class="card-title  line-height" style="color:#05115d;"><b>We are excited to have your support</b></h3>
                </a>
                <br>

                <p class="card-text line-">
                  Thanks to people like you, Heriwork helps underprivileged students raise some income for their upkeep and fees through paid workstudy and internship opportunities. We partner with University Financial Aid offices to make sure that you only engage the most deserving students.
                </p>

                <p class="card-text line-">
                  On our part, we upskill the students to match your desired skillset and train them to truly put their hearts in your work.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-1 border-left">
        <div class="border-bottom d-none d-md-none d-sm-block"></div>
      </div>
      <div class="col-lg-6 pl-0 pr-0 mb-5">
        <form id="validateForm" action="{{route('employer.post.step.one')}}" method="POST">
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
                    <label class="text-black" style="font-weight: 600;">Enter your first name<span>*</span></label>
                    <input class="form-control form-control-lg" type="text" placeholder="" value="{{ $employer->employer_first_name ?? '' }}" name="employer_first_name">
                  </div>
                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">Enter your Last name<span>*</span></label>
                    <input class="form-control form-control-lg" type="text" placeholder="" value="{{ $employer->employer_last_name ?? '' }}" name="employer_last_name">
                  </div>
                 
                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">Enter your phone number<span>*</span></label>
                    <input class="form-control form-control-lg" type="tel" placeholder="" value="{{ $employer->employer_phone ?? '' }}" name="employer_phone">
                  </div>
                  <label for="" class="text-black" style="font-weight: 600;">What gender do you identify with? <span>*</span></label>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="employer_gender" id="exampleRadios1" value="option1">
                    <label class="form-check-label" for="exampleRadios1">
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="employer_gender" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                      Female
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="employer_gender" id="exampleRadios1" value="option1">
                    <label class="form-check-label" for="exampleRadios1">
                      Other
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="employer_gender" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                      Prefer not to say
                    </label>
                  </div>


                </div>
                <div class="col-lg-12 text-end">
                  <button type="submit" class="btn rounded-pill btn-success">Next: Secure Your Account</button>
                </div>
              </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  if ($("#validateForm").length > 0) {
    $("#validateForm").validate({
      rules: {
        employer_first_name: {
          required: true,
        },

        employer_last_name: {
          required: true,
        },

        personal_email: {
          required: true,
          maxlength: 60,
          email: true,
        },

        employer_phone: {
          required: true,
        },

        password: {
          required: true,
          minlength: 5
        },

        confirm_password: {
          required: true,
          minlength: 5,
          equalTo: '[name="password"]'
        }
      },


      messages: {
        name: {
          required: "Name is required.",
        },
        email: {
          required: "Email is required.",
          email: "It does not seem to be a valid email.",
          maxlength: "The email should be or equal to 60 chars.",
        },
      },
    })
  }
</script>
@endsection