<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <link href="{{url('assets/css/style.css')}}" rel="stylesheet">

 </head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo ">
        <h1 style="font-size: 40px;"><a href="{{url('index.html')}}" style="padding-right:50%;">Waiting list</a></h1>
            </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.html" style="font-size: 17px;">Home</a></li>
          <li><a class="nav-link scrollto" href="#services" style="font-size: 17px;">Services</a></li>
                  </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out"> <br><br>
          <h2 style="font-size: 25px;">Join Waiting List</h2>
          <br><br>
        </div>

        <div class="row mt-5">

          

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">


          <div>
            @foreach($errors->all() as $error)
            {{$error}}<br>

            @endforeach
          </div>
            <form  role="form" method ="post">
            @csrf

              <div class="row">
                <div class="col-md-6 form-group">
                  <input style="font-size: 20px;" type="text" name="firstname" class="form-control" id="name" placeholder="Enter your firsname" required>
                </div>

                <div class="col-md-6 form-group">
                  <input style="font-size: 20px;" type="text" name="lastname" class="form-control" id="name" placeholder="Enter your lastname" required>
                </div>
                <br><br><br><br>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input style="font-size: 20px;" type="email" class="form-control" name="email" id="email" placeholder="Enter Email address" required>
                </div>
                <br>
                <div class="col-md-6 form-group">
                  <input style="font-size: 20px;" type="number" name="phonenumber" class="form-control" id="name" placeholder="Phone Number" required>
                </div>
                <br><br><br><br>
              </div>
              <div class="form-group mt-3">
                  <input style="font-size: 20px;" type="text" name="profession" class="form-control" id="name" placeholder="Enter your profession" required>
                </div>
                <br>
              <div class="form-group mt-3">
                <textarea  style="font-size: 20px;"class="form-control" name="profile" rows="5" placeholder="Describe yourself" required></textarea>
              </div>
             <br><br><br>
              <div class="text-center"><button type="submit"  style="font-size: 30px;  background: #ef6603;
  border: 0;padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 50px;">Join Waiting list</button></div>
            </form>

          </div>

        </div>


      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Heriwork</h3>
      <div class="social-links">
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('assets/js/main.js')}}"></script>

</body>

</html>