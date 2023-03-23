<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Heriwork</title>
  @include('header-links')
  <style>
    a {
      text-decoration: none;
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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container col-lg-7  ">
      <br><br> <br><br><br>
      <div class="  border  pb-5 pt-5  rounded-5">
        <h3 style="text-align:center; color:black; font-weight:bolder;">Thanks for staying with us</h3>
        <br>
        <div class="row justify-content-center ">
          <div class="col-lg-5  rounded">
            <div class="card rounded-3 border p-3">
              <div class="card-body">
                <h5 class="card-title"> <b>For Students</b> </h5>
                <p class="card-text">We always work hard to help <a href="#" class="text-success"> deserving students <i class="bi bi-arrow-up-right-circle" data-bs-toggle="modal" href="#exampleModal1Toggle" role="button"></i></a> to find paid work opportunities</p>
                <a href="{{url('studentlogin')}}" class="btn btn-success">Continue as Student</a>

              </div>
            </div>
          </div>
          <div class="col-lg-5 rounded">
            <div class="card rounded-3  border p-3">
              <div class="card-body">
                <h5 class="card-title"><b>For Impact Employers</b></h5>
                <p class="card-text">Every time you engage <a href="#" class="text-success"> deserving students <i class="bi bi-arrow-up-right-circle" data-bs-toggle="modal" href="#exampleModalToggle" role="button"></i> </a> in paid work, you give them a future and a hope. </p>
                <a href="{{url ('employerlogin')}}" class="btn btn-success">Continue as Employer</a>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center mt-4">
          <p class="text-black">Don't have an account ? <a href="{{url('signup')}}">Sign Up</a> </p>
        </div>
      </div>
    </div>
  </section>
  @include('footer-links')



  <br><br>
  <!-- employer modal -->


  <div class="modal  fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel" style="color: rgba(5, 17, 93, 0.9); font-size:xx-large; font-weight:bolder;  justify-content:center; align-items:center;">Heriwork <i class="bi bi-person-workspace" style="color:#ef6603;"></i> </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <div class="row">
            <div class="col-md-6 border-right d-flex align-items-center justify-content-center" style="border-right: 2px solid grey;">

              <span class="bi bi-person-circle   p-3" style="font-size: 3rem; color: rgba(5, 17, 93, 0.9);"></span>
              <h3>Heriwork</h3>

            </div>
            <div class="col-md-6">
              <h4 style="color: black; font-weight:bold;">Who we are </h4>
              <h6 style="color: rgba(5, 17, 93, 0.9); font-weight:bold;">We collaborate to expand paid workstudy jobs and internship opportunities for underprivileged college students to generate some income for upkeep and fees.</h6>
              <h6 style="color: black; "> Your support means the world to us and we're excited to have you on board as we prepare to launch our platform.</h6>
              <h6 style="color: black; "> We appreciate your commitment to supporting underprivileged students through paid workstudy and internship opportunities, and we look forward to working with you to give the students a future and a hope.</h6>
              </h6>
              </h6>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="modal  fade" id="exampleModal1Toggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel" style="color: rgba(5, 17, 93, 0.9); font-size:xx-large; font-weight:bolder;  justify-content:center; align-items:center;">Heriwork <i class="bi bi-person-workspace" style="color:#ef6603;"></i> </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <div class="row">
            <div class="col-md-6 border-right d-flex align-items-center justify-content-center" style="border-right: 2px solid grey;">

              <span class="bi bi-person-circle   p-3" style="font-size: 3rem; color: rgba(5, 17, 93, 0.9);"></span>
              <h3>Heriwork</h3>

            </div>
            <div class="col-md-6">
              <h4 style="color: black; font-weight:bold;">Who we are </h4>
              <h6 style="color: rgba(5, 17, 93, 0.9); font-weight:bold;">We collaborate to expand paid workstudy jobs and internship opportunities for underprivileged college students to generate some income for upkeep and fees.</h6>
              <h6 style="color: black; "> We believe that every student deserves the opportunity to pursue their education to completion regardless of their financial background. That is why we are excited to help deserving students like yourself to raise some income for your upkeep and fees through paid workstudy and internship opportunities courtesy of our partners.

                <h6 style="color: black; "> In addition to raising some income, you will gain valuable experience that will help you grow your career.</h6>
              
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>






</body>

</html>