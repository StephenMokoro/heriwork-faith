<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Heriwork</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <style>
        .rounded-lg {
            border-radius: 1rem;
        }

        .nav-pills .nav-link {
            color: #555;
        }

        .nav-pills .nav-link.active {
            color: #fff;
        }

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
    <!-- Google Fonts -->

    @include('header-links')


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{url('/')}}" class="logo d-flex align-items-center">
                <span style="color:#ef6603;">Heriwork</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>


                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->



    <section id="hero" class="hero d-flex align-items-center">

        <div class="container mt-4">

            <div class="row ">
                <div class="col-md-8 offset-md-2">
                    <div class="card border">
                        <div class="card-header">
                            <h5> <b> Reset password </b></h5>
                        </div>
                        <div class="card-body">

                            <div class="col-lg-12">

                                <form action="{{ route('studentreset.password.post') }}" id="validateForm" method="POST">

                                    <div class="row gy-4">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">

                                        <div class="form-group">
                                            <input type="text" id="student_email" class="form-control" name="student_email" required autofocus placeholder="Enter Email">
                                            @if ($errors->has('student_email'))
                                            <span class="text-danger">{{ $errors->first('student_email') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="passwordinput">
                                                Password
                                            </label>
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <input type="password" id="password" class="form-control" name="password" required autofocus placeholder="Enter new password">

                                                    @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                    @endif
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

                                     
                                        <br> <br>
                                        <div class="form-group">
                                            <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus placeholder="Confirm password">
                                            @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                            @endif
                                        </div>
                                        <br>

                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Reset Password
                                            </button>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br>
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span>Heriwork</span>
                        </a>
                        <p>Expanding workstudy job opportunities for underprivileged college students to generate some income for upkeep and fees .</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>



                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Nairobi <br>

                            <strong>Phone:</strong> +25412345678<br>
                            <strong>Email:</strong> engageus@heriwork.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

    </footer>
    @include('footer-links')

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
    </script>

</body>

</html>