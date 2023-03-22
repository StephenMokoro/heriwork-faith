@extends('Employer.layout.app')
@section('content')

@include('sweetalert::alert')
<div id="wrapper" class="toggle">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-5 h100">
                <div class="card mb-4">
                    <div class="card-body pt-4 pl-0 pr-0 pb-5 ml-0 mr-0 mt-4 mb-0">
                        <div class="row">
                            <div class="col-lg-12 pl-5 pr-5 mb-3">
                                <p class="text-secondary">4/4 &nbsp; &nbsp;Secure your account</p>
                                <a href="#" style="text-decoration:none;">
                                    <h3 class="card-title  line-height" style="color:#05115d;"><b>
                                            Let's make sure that your account is secure</b></h3>
                                </a>
                                <br>
                                <p class="card-text line-">The security of your account and your data is important to us. To start with, create a strong password that you will use to access your account. </b></h3>
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
                <form id="validateForm" action="{{ route('student.password_details.post') }}" method="POST">
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
                                    <!-- Password input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="passwordinput">
                                            Password
                                        </label>
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <input id="password" class="form-control input-md" name="password" type="password" value="{{ $product->password ?? '' }}" placeholder="Enter your password">

                                                <label class="btn" style="left:-30px!important;" type="button" id="button-addon2">
                                                    <span class="show-pass" style="position: absolute; top:5px" onclick="toggle()">
                                                        <i class="far fa-eye" onclick="myFunction(this)"></i>
                                                    </span></label>
                                            </div>
                                            <div id="popover-password">
                                                <p><span id="result"></span></p>
                                                <div class="progress">
                                                    <div id="password-strength" class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                                    </div>
                                                </div>
                                                <ul class="list-unstyled">
                                                    <li class="">
                                                        <span class="low-upper-case">
                                                            <i class="fas fa-circle" aria-hidden="true"></i>
                                                            &nbsp;Lowercase &amp; Uppercase
                                                        </span>
                                                    </li>
                                                    <li class="">
                                                        <span class="one-number">
                                                            <i class="fas fa-circle" aria-hidden="true"></i>
                                                            &nbsp;Number (0-9)
                                                        </span>
                                                    </li>
                                                    <li class="">
                                                        <span class="one-special-char">
                                                            <i class="fas fa-circle" aria-hidden="true"></i>
                                                            &nbsp;Special Character (!@#$%^&*)
                                                        </span>
                                                    </li>
                                                    <li class="">
                                                        <span class="eight-character">
                                                            <i class="fas fa-circle" aria-hidden="true"></i>
                                                            &nbsp;Atleast 8 Character
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="passwordinput">
                                            Confirm Password
                                        </label>
                                        <div class="col-md-12">
                                            <input class="form-control form-control-lg" type="password" placeholder="" value="{{ $product->confirm_password ?? '' }}" name="confirm_password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-end">
                                        <a href="{{ route('student.personal_details') }}" class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border">Back</a>

                                        <button type="submit" class="btn rounded-pill btn-success">Submit</button>
                                    </div>
                                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    let state = false;
    let password = document.getElementById("password");
    let passwordStrength = document.getElementById("password-strength");
    let lowUpperCase = document.querySelector(".low-upper-case i");
    let number = document.querySelector(".one-number i");
    let specialChar = document.querySelector(".one-special-char i");
    let eightChar = document.querySelector(".eight-character i");

    password.addEventListener("keyup", function() {
        let pass = document.getElementById("password").value;
        checkStrength(pass);
    });

    function toggle() {
        if (state) {
            document.getElementById("password").setAttribute("type", "password");
            state = false;
        } else {
            document.getElementById("password").setAttribute("type", "text")
            state = true;
        }
    }

    function myFunction(show) {
        show.classList.toggle("fa-eye-slash");
    }

    function checkStrength(password) {
        let strength = 0;

        //If password contains both lower and uppercase characters
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
            strength += 1;
            lowUpperCase.classList.remove('fa-circle');
            lowUpperCase.classList.add('fa-check');
        } else {
            lowUpperCase.classList.add('fa-circle');
            lowUpperCase.classList.remove('fa-check');
        }
        //If it has numbers and characters
        if (password.match(/([0-9])/)) {
            strength += 1;
            number.classList.remove('fa-circle');
            number.classList.add('fa-check');
        } else {
            number.classList.add('fa-circle');
            number.classList.remove('fa-check');
        }
        //If it has one special character
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
            strength += 1;
            specialChar.classList.remove('fa-circle');
            specialChar.classList.add('fa-check');
        } else {
            specialChar.classList.add('fa-circle');
            specialChar.classList.remove('fa-check');
        }
        //If password is greater than 7
        if (password.length > 7) {
            strength += 1;
            eightChar.classList.remove('fa-circle');
            eightChar.classList.add('fa-check');
        } else {
            eightChar.classList.add('fa-circle');
            eightChar.classList.remove('fa-check');
        }

        // If value is less than 2
        if (strength < 2) {
            passwordStrength.classList.remove('progress-bar-warning');
            passwordStrength.classList.remove('progress-bar-success');
            passwordStrength.classList.add('progress-bar-danger');
            passwordStrength.style = 'width: 10%';
        } else if (strength == 3) {
            passwordStrength.classList.remove('progress-bar-success');
            passwordStrength.classList.remove('progress-bar-danger');
            passwordStrength.classList.add('progress-bar-warning');
            passwordStrength.style = 'width: 60%';
        } else if (strength == 4) {
            passwordStrength.classList.remove('progress-bar-warning');
            passwordStrength.classList.remove('progress-bar-danger');
            passwordStrength.classList.add('progress-bar-success');
            passwordStrength.style = 'width: 100%';
        }
    }
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
                confirm_password: {
                    equalTo: "Please enter the same password!"
                },
            },
        })
    }
    let main_div = document.getElementById("root");
    let chosen_skills = document.getElementById("chosen-skills");
    let skills_list = document.getElementById("skills-list");


    main_div.childNodes.forEach(
        skill => {
            skill.addEventListener("click", function(e) {
                if (e.target.parentNode.id == "skills-list") {
                    console.log(e.target);
                    chosen_skills.appendChild(e.target);
                } else if (e.target.parentNode.id == "chosen-skills") {
                    console.log(e.target);
                    skills_list.appendChild(e.target);
                    chosen_skills.removeChild(e.target);
                }
            })
        });
</script>

<!-- <script type="text/javascript">
  $('.itemName').select2({
    placeholder: ' Select a skill',
    ajax: {
      url: '/select2-autocomplete-ajax',
      dataType: 'json',
      delay: 250,
      processResults: function(data) {
        return {
          results: $.map(data, function(item) {
            return {
              text: item.ijob_skills,
              id: item.id
            }
          })
        };
      },
      cache: true
    }
  });
</script> -->
@endsection