<!--  
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <span style="color:#ef6603;">Heriwork</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="#partner">Partner With Us</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            
              <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            <li><a class="getstarted scrollto border text-black" style="background-color:#fff;color:#05115d; opacity: 0.9" href="{{url('employer_login')}}">Sign In</a></li>
        <li><a class="getstarted scrollto" href="{{url('signup')}}">Sign Up</a></li>

            </ul>
         
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header> -->


<!-- End Header -->

<!-- <div class="container">
        <div class="row">
            <div class="col-md-4-offset-4" style="margin-top:20px;">
           <h3>Welcome to dashboard</h3>
           <hr>
           <table class="table">
            <thead><th>name</th><th>Action</th></thead>
            <tbody>
                <tr>
                  
                </tr>

                
            </tbody>

           </table>
        </div>
        </div>
    </div> -->
<!-- Credit card form -->
<!--  -->
<!-- Credit card form -->
<!-- Vendor JS Files -->
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

        .pill-container {
            display: flex;
        }

        .pill {
            background-color: #f2f2f2;
            border-radius: 20px;
            padding: 10px 20px;
            margin-right: 10px;
            font-size: 14px;
        }

        .avatar {
            vertical-align: middle;
            width: 40px;
            height: 40px;
            border-radius: 50%;
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
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{$data->student_first_name}}</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header" style="text-align:center;align-items:center; justify-content:center;">
                                <img src="{{url('assets/img/team/team-1.jpg')}}" style="width: 50%; height: auto; " alt="Your Image" class="rounded-circle">
                                <br>
                                <h6 class="text-black" style="text-align: center; font-weight:bold; font-size:larger; ">{{$data->student_first_name}}
                                </h6>
                                <span>Freelancer</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>


                            <li>
                                <a class="dropdown-item d-flex align-items-center " style="font-size: large; font-weight:bold; color:rgba(5, 17, 93, 0.9); " href="#">
                                    <i class="bi bi-gear fa-3x" style="color:rgba(5, 17, 93, 0.9); font-weight:bold;"></i>&nbsp;&nbsp;
                                    <span>Settings</span>
                                </a>
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

    <div class="container">
        <br><br><br><br>

        <div class="row job-row border-top border pl-0 pr-0 rounded-4" style="width:100%; height:15vh">
            <h3 class="text-black">
                <div class="row mt-4">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body p-0 ml-0 mr-0 mb-0">
                                <div class="row  pl-5 pr-5">
                                    <div class="col-lg-12">
                                        <span class="card-title  line-height" style="font-weight: 700; color:#05115d;"> @php echo Session::get('greeting'); @endphp {{$data->student_first_name}}</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <i class="bi bi-send fa-8x " style="color:#ef6603"></i>
                        <!-- <a href="{{url('internship')}}" class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border hover" style="font-size:14px; background-color:#05115d; color:white;"> Post a job</a> -->
                    </div>
                </div>
            </h3>
            <div class="col-lg-12 col-job-card">
                <div class="card mb-4">
                    <div class="card-body p-0 ml-0 mr-0 mt-4 mb-0">
                        <div class="row  pl-5 pr-5">
                            <div class="col-lg-4">
                                <a href="#">

                                </a>
                            </div>

                            <!-- <div class="col-lg-4">
                                <h6 class="text-secondary" style="font-weight: bold;font-size:larger;"> <span style="color:#05115d; font-weight:bolder; font-size:large;"> @php echo Session::get('greeting'); @endphp {{$data->student_first_name}}</span> </h6>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="row">

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <!-- <h5 class="card-title">Special title treatment</h5> -->
                        <h6>Jobs you might like</h6>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Best matches</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Most recent</button>

                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Saved jobs</button>

                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row job-row border-top border pl-0 pr-0 rounded">
                            <h3 class="text-black">
                                <div class="row mt-4">
                                    <div class="col-lg-8">
                                        <div class="card">
                                            <div class="card-body p-0 ml-0 mr-0 mb-0">
                                                <div class="row  pl-5 pr-5">
                                                    <div class="col-lg-12">
                                                        <span class="card-title text-black line-height" style="font-weight: 700;">Jobs you might like </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h3>
                            <div class="col-lg-12 col-job-card">
                                <div class="card mb-4">
                                    <div class="card-body p-0 ml-0 mr-0 mt-4 mb-0">
                                        <div class="row  pl-5 pr-5">
                                            <div class="col-lg-12 mb-3">
                                                <a href="#">
                                                    <h5 class="card-title  line-height" style="font-weight: 600; color:#05115d;">Website and Email Signature </h5>
                                                </a>
                                            </div>

                                            <div class="col-lg-4">
                                                <h6 class="text-secondary">Fixed-Price &nbsp; &nbsp; &nbsp; Intermediate </h6>
                                                <h6 class="text-secondary">Created 4 minutes ago</h6>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <a href="#">
                                                    <h5 class="card-title text-black line-height">I have a website that needs to be edited and an email signature to be created</h5>
                                                </a>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="pill-container">
                                                    <div class="pill">JavaScript</div>
                                                    <div class="pill">HTML5</div>
                                                    <div class="pill">CSS3</div>
                                                    <div class="pill">Website</div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-job-card">
                                <div class="card mb-4 hover">
                                    <div class="card-body p-0 ml-0 mr-0 mt-4 mb-0">
                                        <div class="row  pl-5 pr-5">
                                            <div class="col-lg-12 mb-3">
                                                <a href="#">
                                                    <h5 class="card-title  line-height" style="font-weight: 600; color:#05115d;">Copy/Migrate certain WordPress web hosting to another hosting. </h5>
                                                </a>
                                            </div>

                                            <div class="col-lg-4">
                                                <h6 class="text-secondary">Fixed-Price &nbsp; &nbsp; &nbsp; Intermediate </h6>
                                                <h6 class="text-secondary">Created 4 minutes ago</h6>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <a href="#">
                                                    <h5 class="card-title text-black line-height">Copy/Migrate certain wordpress web hosting to another.</h5>
                                                </a>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="pill-container">
                                                    <div class="pill">Web Development</div>
                                                    <div class="pill">Wordpress</div>
                                                    <div class="pill">cpanel</div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row job-row border-top border pl-0 pr-0 rounded">
                            <h3 class="text-black">
                                <div class="row mt-4">
                                    <div class="col-lg-8">
                                        <div class="card">
                                            <div class="card-body p-0 ml-0 mr-0 mb-0">
                                                <div class="row  pl-5 pr-5">
                                                    <div class="col-lg-12">
                                                        <span class="card-title text-black line-height" style="font-weight: 700;">Your Drafts </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4"><a href="#" style="font-size:14px;">See all drafts</a></div>
                                </div>
                            </h3>
                            <div class="col-lg-12 col-job-card">
                                <div class="card mb-4">
                                    <div class="card-body p-0 ml-0 mr-0 mt-4 mb-0">
                                        <div class="row  pl-5 pr-5">
                                            <div class="col-lg-12 mb-3">
                                                <a href="#">
                                                    <h5 class="card-title text-black line-height" style="font-weight: 600;">Combating climate change through satellite image analysis </h5>
                                                </a>
                                            </div>

                                            <div class="col-lg-4">
                                                <h6 class="text-secondary">Saved 4 minutes ago</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ps-5 mt-5">
                <div class="row mt-5">
                    <div class="card mb-3 border">
                        <div class="card-body p-0 m-0">
                            <div class="row   ps-3 pe-3 pt-4">
                                <div class="col-lg-12 mb-3">

                                    <a href="#">
                                        <h3 class="card-title text-black line-height" style="font-weight: 700;">Some internship jobs</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
            if (!e.target.matches('.dropbtn')) {
                var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }
            }
        }
    </script>

    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
        var myDate = new Date();
        var hrs = myDate.getHours();
        var greet;
        if (hrs < 12)
            greet = 'Good Morning ';
        else if (hrs >= 12 && hrs <= 17)
            greet = 'Good Afternoon ';
        else if (hrs >= 17 && hrs <= 24)
            greet = 'Good Evening ';
        document.getElementById('lblGreetings').innerHTML =
            '<b>' + greet + '{{$data->student_first_name}}';
    </script>


</body>

</html>