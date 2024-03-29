<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Heriwork</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Google Fonts -->
    @include('header-links')

    <style type="text/css">
        .nav-pills .nav-link {
            background: white;
            color: rgba(5, 17, 93, 0.9);
            font-weight: 600;
        }


        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background: white;
            color: rgba(5, 17, 93, 0.9);
            border-bottom: 2px solid #000;
            border-radius: 0 !important;
            font-weight: 600
        }

        /*  this skips the first div and puts a border top on the subsequent ones      */

        .job-row>.col-job-card:not(:first-of-type) {
            border-top: 1px solid #ccc;
        }
    </style>

</head>

<body>
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{url('/')}}" class="logo d-flex align-items-center">
                <span style="color:#ef6603;">Heriwork</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
                    <li class="dropdown"><a href="#"><span></span>{{$data->employer_first_name}} <i class="bi bi-chevron-down"></i></a>

                        <ul>
                            <li><a href="{{url('internship')}}">Edit profile</a></li>
                            <li><a class=" " style="background-color:#ef6603; color:white; opacity: 0.9" href="{{ route('employer.logout') }}">logout</a></li>
                    </li>
                </ul>
                </li>
                <!-- <li><a class="getstarted scrollto border text-black" style="background-color:#fff;color:#05115d; opacity: 0.9" href="{{url('employer_login')}}">Sign In</a></li>
          <li><a class="getstarted scrollto" href="{{url('signup')}}">Sign Up</a></li> -->

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container col-lg-7  ">
            <br><br>
            <div class="  border  pb-5 pt-5  rounded-5">
                <h3 style="text-align:center; color:black; font-weight:bolder;">
                Dear {{$data->employer_first_name}}
                </h3>
                
                <h5 style=" color:black; font-weight:bolder;justify-content:center;">
                    <br>
                    Thank you for joining our early bird employer community.

                    <h5 style=" color:black; font-weight:bolder;">Your support means the world to us and we're excited to have you on board as we prepare to launch our platform. We appreciate your commitment to supporting underprivileged students through paid workstudy and internship opportunities, and we look forward to working with you to give the students a future and a hope.
                    <br>
                    <br>
                    
                        <h5 style=" color:black; font-weight:bolder;">We'll be sure to keep you informed as we make progress towards launch, and we'll let you know as soon as our platform is ready for you to start posting job opportunities. In the meantime, if you have any questions or feedback, please call us on <a href="#">0712345678</a>  or email us on <a href="#">engageus@heriwork.com</a>

                            We will be grateful if you can refer our initiative to your network.
                        </h5>
                        <br><br>
                        <h6 style=" color:black; font-weight:bolder;">
                        With appreciation,
                        </h6>
                        <h6 style=" color:black; font-weight:bolder;">
                           Heriwork 

                        </h6>
    
                       
                    </h5>
                    <br>
                    <div class="row justify-content-center ">
                        <div class="col-lg-5  rounded">
                        </div>
                    </div>
            </div>
        </div>
    </section>


</body>

</html>