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
                    <img src="{{url('assets/img/logo/logo2.png')}}" alt="">
                </a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li> &nbsp; &nbsp;
                        <li class="nav-item dropdown pe-3">

                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle rounded-circle"></i>
                                <span class="d-none d-md-block dropdown-toggle ps-2">{{ ucfirst(Auth()->user()->student_first_name) }}</span>
                            </a><!-- End Profile Iamge Icon -->

                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header" style="text-align:center;align-items:center; justify-content:center;">
                                    <!-- <img src="{{url('assets/img/team/team-1.jpg')}}" style="width: 50%; height: auto; " alt="Your Image" class="rounded-circle">
                                    <br> -->
                                    
                                    <h6 class="text-black" style="text-align: center; font-weight:bold; font-size:larger; ">{{ ucfirst(Auth()->user()->student_first_name) }}                                 </h6>
                                    <span>Student</span>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" style="font-size: large; font-weight:bold; color:rgba(5, 17, 93, 0.9); " href="{{url('studentlogout')}}">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Log Out</span>
                                    </a>
                                </li>

                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->
                    </ul>

                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>

            </div>
        </header>
        <br><br>

        <section id="hero" class="hero d-flex align-items-center">
            <div class="container col-lg-7  ">
                <div class="  border  pe-5 ps-5 pb-5 pt-5  rounded-5">
                    <h5 style="text-align:center; color:black; font-weight:bolder;">
                        Dear {{ ucfirst(Auth()->user()->student_first_name) }}
                    </h5>
                    <br>
                    <h5 style=" color:black; font-weight:bolder;"> We are thrilled to have you on board. As one of our first sign-ups. You will be among the first to access our platform when it launches. We are putting the final touches on our platform and are eager to share it with you soon.
                    </h5>
                    <br>

                    <h5 style=" color:black; font-weight:bolder;"> We believe that every student deserves the opportunity to pursue their education to completion regardless of their financial background. That is why we are excited to help deserving students like yourself to raise some income for your upkeep and fees through paid workstudy and internship opportunities courtesy of our partners. In addition to raising some income, you will gain valuable experience that will help you grow your career.
                    </h5>
                    <br>
                    <h5 style=" color:black; font-weight:bolder;">We'll be sure to keep you informed as we make progress towards launch, and we'll let you know as soon as our platform is ready for you to start posting job opportunities. In the meantime, if you have any questions or feedback, please call us on <a href="#">0712345678</a> or email us on <a href="#">engageus@heriwork.com</a>

                    </h5>

                    <h5 style=" color:black; font-weight:bolder;">
                        We'll be sure to keep you informed as we make progress towards launch

                    </h5>
                    <br>
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