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
          <li><a class="nav-link scrollto active" href="#">Partner with us</a></li>
          <li><a class="nav-link scrollto active" href="#">Donate</a></li>
          <!-- <li><a class="nav-link scrollto active" href="{{url('internship')}}">Post a job</a></li> -->
          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-person-circle rounded-circle"></i>
              <span class="d-none d-md-block dropdown-toggle ps-2">Faith
              </span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                </h6>
                <span>Web Designer</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

             
             
              <li>
                <a class="dropdown-item d-flex align-items-center" href="{{route('employer.logout')}}">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>

            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container col-lg-7  ">
      <br><br>
      <div class="  border pe-5 ps-5  pb-5 pt-5  rounded-5">
        <h3 style="text-align:center; color:black; font-weight:bolder;">
        Dear Faith
        </h3>

        <h5 style=" color:black; font-weight:bolder;justify-content:center;">
          <br>
          Thank you for joining our early bird employer community.

          <h5 style=" color:black; font-weight:bolder;">Your support means the world to us and we're excited to have you on board as we prepare to launch our platform. We appreciate your commitment to supporting underprivileged students through paid workstudy and internship opportunities, and we look forward to working with you to give the students a future and a hope.
            <br>
            <br>

            <h5 style=" color:black; font-weight:bolder;">We'll be sure to keep you informed as we make progress towards launch, and we'll let you know as soon as our platform is ready for you to start posting job opportunities. In the meantime, if you have any questions or feedback, please call us on <a href="#">0712345678</a> or email us on <a href="#">engageus@heriwork.com</a>

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