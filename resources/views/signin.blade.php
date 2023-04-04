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
        <img src="{{url('assets/img/logo/logo2.png')}}" alt="">
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
                <p class="card-text">We always work hard to help <a  style="color:rgba(5, 17, 93, 0.9); font-weight:900; font-size:larger;"  data-bs-toggle="modal" href="#Modal1Toggle" role="button"> deserving students <i class="bi bi-arrow-up-right-circle"></i></a> to find paid work opportunities</p>
                <a href="{{url('student-login')}}" class="btn btn-success">Continue as Student</a>

              </div>
            </div>
          </div>
          <div class="col-lg-5 rounded">
            <div class="card rounded-3  border p-3">
              <div class="card-body">
                <h5 class="card-title"><b>For Impact Employers</b></h5>
                <p class="card-text">Every time you engage <a  style="color:rgba(5, 17, 93, 0.9); font-weight:900; font-size:larger;" data-bs-toggle="modal" href="#exampleModalToggle" role="button"> deserving students <i class="bi bi-arrow-up-right-circle " ></i> </a> in paid work, you give them a future and a hope. </p>
                <a href="{{url ('employer-login')}}" class="btn btn-success">Continue as Employer</a>
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
          <h5 class="modal-title" id="exampleModalToggleLabel" style="color:#ef6603; font-size:xx-large; font-weight:bolder;  justify-content:center; align-items:center;text-align:center;">Heriwork </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <div class="row">
            <div class="col-md-12">

              <h4 style="color: black; font-weight:bold;">Deserving student </h4>
              <h6 style="color: rgba(5, 17, 93, 0.9); font-weight:bold;">A deserving student in Heriwork is college student who is committed to their education and is facing financial difficulties. They are willing to put in the effort to balance work and study and have demonstrated academic excellence and/or a strong work ethic. These students have a clear career path or goal and can benefit from gaining real-world work experience in their chosen field. They are also eager to give back to their communities. At Heriwork, we believe that these are students who deserve access to paid work-study jobs and internship opportunities to generate income for their upkeep and fees. We are committed to collaborating with colleges and universities to expand these opportunities, support, training and mentoring these students in their academic and professional pursuits.</h6>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
<!-- student modal -->
  <div class="modal  fade" id="Modal1Toggle" aria-hidden="true" aria-labelledby="ModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalToggleLabel" style="color:#ef6603; font-size:xx-large; font-weight:bolder;  justify-content:center; align-items:center;">Heriwork</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <div class="row">

            <div class="col-md-12">
              <h4 style="color: black; font-weight:bold;">Deserving student </h4>
              <h6 style="color: rgba(5, 17, 93, 0.9); font-weight:bold;">A deserving student in Heriwork is college student who is committed to their education and is facing financial difficulties. They are willing to put in the effort to balance work and study and have demonstrated academic excellence and/or a strong work ethic. These students have a clear career path or goal and can benefit from gaining real-world work experience in their chosen field. They are also eager to give back to their communities. At Heriwork, we believe that these are students who deserve access to paid work-study jobs and internship opportunities to generate income for their upkeep and fees. We are committed to collaborating with colleges and universities to expand these opportunities to support, train and mentor these students in their academic and professional pursuits.</h6>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>






</body>

</html>