<!DOCTYPE html>
<html>

<head>
    @include('header-links')
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
    @include('sweetalert::alert')

    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{url('/')}}" class="logo d-flex align-items-center">
                <img src="{{url('assets/img/capture.PNG')}}" alt="">
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
        <br><br>
        <div class="container ">
            <div class="row ">
                <div class="col-md-8 offset-md-2 ">
                    <div class="card border">
                        <div class="card-header">

                            <h5> <b> Student Login</b></h5>
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
                                <form id="validateForm" method="post" enctype="multipart/form-data" action="{{route('student-login')}}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="student_email" name=" student_email" placeholder="Enter student email">
                                        <span class="text-danger"> @error('student_email'){{$message}} @enderror</span>
                                    </div>
                                    <br>
                                    <div class="form-group ">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                        <span class="text-danger"> @error('password'){{$message}} @enderror</span>

                                    </div>
                                    <br>


                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary"> Login </button>
                                        <p class="float-right mt-2"> Don't have an account? <a href="{{ url('student-detail')}}" class="" style="color:#ef6603;">Signup </a> </p>
                                        <label class="text-end">
                                            <a href="{{ route('studentforget.password.get') }}">Reset Password</a>
                                        </label>
                                    </div>

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



</body>




</html>