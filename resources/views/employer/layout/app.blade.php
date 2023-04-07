<!DOCTYPE html>
<html>

<head>
    <title></title>

    @extends('header-links')
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

</head>

<body style="background-color: #fff">
    <header id="header" class="header ">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{url('/')}}" class="logo d-flex align-items-center">
                <img src="{{url('assets/img/capture.PNG')}}" alt="">

            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>

                    <!-- <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{route('employer.logout')}}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li> -->
                    <!-- <li><a class="getstarted scrollto border text-black" style="background-color:#fff;color:#05115d; opacity: 0.9" href="{{url('employer_login')}}">Sign In</a></li>
          <li><a class="getstarted scrollto" href="{{url('signup')}}">Sign Up</a></li> -->

                </ul>
            </nav>

        </div>
    </header>


    <div class="container">
        @yield('content')
    </div>
    @include('footer-links')
</body>




</html>