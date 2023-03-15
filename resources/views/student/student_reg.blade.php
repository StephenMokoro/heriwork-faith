<!DOCTYPE html>
<html>

<head>
    @include('header-links')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1c2c2462bf.js" crossorigin="anonymous"></script>
    <style>
        .form-horizontal {
            width: 320px;
            background-color: #ffffff;
            padding: 25px 38px;
            border-radius: 12px;
            box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.5);
        }

        .control-label {
            text-align: left !important;
            padding-bottom: 4px;
        }

        .progress {
            height: 3px !important;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .show-pass {
            position: absolute;
            top: 5%;
            right: 8%;
        }

        .progress-bar-danger {
            background-color: #e90f10;
        }

        .progress-bar-warning {
            background-color: #ffad00;
        }

        .progress-bar-success {
            background-color: #02b502;
        }

        .login-btn {
            width: 180px !important;
            background-image: linear-gradient(to right, #f6086e, #ff133a) !important;
            font-size: 18px;
            color: #fff;
            margin: 0 auto 5px;
            padding: 8px 0;
        }

        .login-btn:hover {
            background-image: linear-gradient(to right, rgba(255, 0, 111, 0.8), rgba(247, 2, 43, 0.8)) !important;
            color: #fff !important;
        }

        .fa-eye {
            color: #022255;
            cursor: pointer;
        }

        .ex-account p a {
            color: #f6086e;
            text-decoration: underline;
        }

        .fa-circle {
            font-size: 6px;
        }

        .fa-check {
            color: #02b502;
        }

        .error {
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>




    </style>
</head>

<body>


    <section id="hero" class="hero d-flex align-items-center">
        <br><br>
        <div class="container ">
            <div class="row ">
                <div class="col-md-8 offset-md-2 ">
                    <div class="card border">
                        <div class="card-header">
                            <h6></h6>
                            <h4>Welcome to Heriwork</h4>
                        </div>
                        <div class="card-body">
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                            @endif

                            <div class="col-lg-12">
                                <form id="validateForm" method="post" enctype="multipart/form-data" action="{{route('student-registration')}}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="firstname">First name</label>
                                            <input type="text" class="form-control" id="inputEmail4" name="student_first_name">
                                            <span class="text-danger"> @error('student_first_name'){{$message}} @enderror</span>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lastname">Last name</label>
                                            <input type="text" class="form-control" id="lastname" name="student_last_name">
                                            <span class="text-danger"> @error('student_last_name'){{$message}} @enderror</span>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">School email address</label>
                                        <input type="email" class="form-control" id="student_email" name="student_email">
                                        <span class="text-danger"> @error('student_email'){{$message}} @enderror</span>

                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Student phone number</label>
                                        <input type="tel" class="form-control" id="student_phone" name="student_phone">
                                        <span class="text-danger"> @error('student_phone'){{$message}} @enderror</span>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="file">Upload cv</label>
                                            <input type="file" class="form-control" id="file" name="upload_cv">
                                            <span class="text-danger"> @error('upload_cv'){{$message}} @enderror</span>

                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="file">Upload progress report</label>
                                            <input type="file" class="form-control" id="progress_report" name="progress_report">
                                            <span class="text-danger"> @error('progress_report'){{$message}} @enderror</span>

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="number">Institution id</label>
                                            <input type="number" class="form-control" id="institution_id" name="institution_id">
                                            <span class="text-danger"> @error('institution_id'){{$message}} @enderror</span>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="passwordinput">
                                            Password
                                        </label>
                                        <div class="col-md-12">
                                            <input id="password" class="form-control input-md" name="password" type="password" value="{{ $product->password ?? '' }}" placeholder="Enter your password">
                                            <span class="text-danger"> @error('password'){{$message}} @enderror</span>

                                            <span class="show-pass" onclick="toggle()">
                                                <i class="far fa-eye" onclick="myFunction(this)"></i>
                                            </span>
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
                                    <div class="form-group col-md-12">
                                        <label for="password">Confirm password</label>
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                                        <span class="text-danger"> @error('confirm_password'){{$message}} @enderror</span>

                                    </div>


                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </form>
                                <!-- <form action="" method="POST" class="">
                                    @csrf
                                    <div class="row gy-4">
                                        <br> -->
                                <!-- <div class="col-md-12">
                                            <select class="itemName form-control" name="school_name" id="school"></select>

                                        </div>
                                        <p>If your school is listed kindly contact the Financial aid student office for further guidance. Else, if school not listed please provide accurate details in the form below </p> -->

                                <!-- <div class="col-md-12">
                                            <input type="text" name="others" class="form-control" placeholder="Add school name">

                                        </div> -->
                                <!-- <div class="col-md-6">
                                            <input type="text" name="student_first_name" class="form-control" placeholder="Your first name" required>

                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="student_last_name" class="form-control" placeholder="Your last name" required>

                                        </div>


                                        <div class="col-md-12">
                                            <input type="text" name="student_email" class="form-control" placeholder="Your school email" required>

                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="student_phone" class="form-control" placeholder="Your phone number" required>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="passwordinput">
                                                Password
                                            </label>
                                            <div class="col-md-12">
                                                <input id="password" class="form-control input-md" name="password" type="password" value="{{ $product->password ?? '' }}" placeholder="Enter your password">
                                                <span class="show-pass" onclick="toggle()">
                                                    <i class="far fa-eye" onclick="myFunction(this)"></i>
                                                </span>
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
                                        <div class="col-md-12">
                                            <input type="text" name="student_phone" class="form-control" placeholder="Confirm password" required>

                                        </div>



                                        <div class="col-md-12 text-center">

                                            <button class="btn btn-primary" style="background-color:rgba(5, 17, 93, 0.9);" type="submit">Submit</button>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <p> <a href="{{url('student_login')}}">Already have an account? Sign In</a>
                                        </div>
                                        </p>
                                    </div> -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Footer ======= -->
    <br><br>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script src="https://kit.fontawesome.com/1c2c2462bf.js" crossorigin="anonymous"></script>

</body>
<script type="text/javascript">
    $('.itemName').select2({
        placeholder: 'Search School',
        ajax: {
            url: '/select2-autocomplete-ajax',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.school_name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>
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
                student_first_name: {
                    required: true,
                },

                student_last_name: {
                    required: true,
                },

                student_email: {
                    required: true,
                    maxlength: 60,
                    email: true,
                },

                student_phone: {
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
</script>

</html>