<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Heriwork</title>
      <meta content="" name="description">

      <meta content="" name="keywords">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      <title>@yield('title')</title>
     <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
     <link rel="stylesheet" href="{{url('assets/css/leaplug.css')}}">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />

      <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">
      <style>
  
  .highlight{
	  position:absolute;top:0;left:30px; 
	}
  
  .highlight span{width:100%; }
  .details {
	  display: inline-block;
	  border-radius: 0 3px 3px 0;
	  padding: 5px 13px;
	  color: #000;
	  font-size: 16px;
	  font-weight: 700;
	  background: rgba(212, 172, 13,0.8);
  }
  a{
   text-decoration: none!important;
  }
  </style>

    </head>

    <body>

    <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <span style="color:#ef6603;" >Heriwork</span>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('internship')}}">Post Job</a></li>
          <li><a class="nav-link scrollto" href="#services">Student Applications</a></li>
          <li><a class="nav-link scrollto" href="#services">Student Applications</a></li>
          <li><a class="nav-link scrollto" href="#portfolio"></a></li>
          <li><a class="nav-link scrollto" href="#contact"></a></li>
          <li><a class="getstarted scrollto" style="background-color:#ef6603;" href="{{url('logout')}}">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
 </head>

<body>
 
<br><br><br>
  <div class="container">
    <div class="row my-2">
      <div class="col-lg-12 d-flex justify-content-between align-items-center mx-auto">
        <div>
          <h2 class="text-primary">@yield('heading')</h2>
        </div>
        <div>
          <a href="@yield('link')" class="btn btn-primary rounded-pill">@yield('link_text')</a>
        </div>

      </div>
    </div>

    @yield('content')

  </div>
  
      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer">

        <div class="footer-newsletter">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-12 text-center">
                <h4>Our Newsletter</h4>
              </div>
              <div class="col-lg-6">
                <form action="" method="post">
                  <input type="email" name="email" placeholder="Enter email address"><input type="submit" value="Subscribe">
                </form>
              </div>
            </div>
          </div>
        </div>

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


      </footer><!-- End Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
<script src="https://cdn.tiny.cloud/1/jjqcoi1aa4yi5mopawkjpci4avx4z1dh8yyqa8t47lp4mk6u/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
		tinymce.init({
			selector:'#description'
		});
	</script>
</body>

</html>