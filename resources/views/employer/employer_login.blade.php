    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Heriwork</title>
      <meta content="" name="description">

      <meta content="" name="keywords">

      <style>
        
    .rounded-lg {
      border-radius: 1rem;
    }

    .nav-pills .nav-link {
      color: #555;
    }

    .nav-pills .nav-link.active {
      color: #fff;
    }
      </style>
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">

    
    </head>

    <body>

      <!-- ======= Header ======= -->
      <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="{{url('/')}}" class="logo d-flex align-items-center">
            <span style="color:#ef6603;" >Heriwork</span>
          </a>

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
              <li><a class="getstarted scrollto" style="background-color:#ef6603;" href="{{url('employer_registration')}}">Sign Up</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

        </div>
      </header><!-- End Header -->
     
     
     
      <section id="hero" class="hero d-flex align-items-center">

      <div class="container mt-4">

        <div class="row">
        <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
              <h5> <b> Employer Login </b></h5>
            </div>
            <div class="card-body">
            @if(Session::has('error'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('error') }}
                                        @php
                                            Session::forget('error');
                                        @endphp
                                    </div>
                                @endif

            
              <div class="col-lg-12">
            <form method="post" action="{{ url('login') }}">
            <div class="row gy-4">

            @csrf

                            <div class="col-md-12">
                                <input type="text" name="personal_email" id="email" class="form-control" placeholder="Enter Personal E-mail Address" value="{{ old('org_email') }}"/>
                                {!! $errors->first('personal_email', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <br> <br>

                            <div class="col-md-12">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" value="{{ old('password') }}"/>
                                {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <br><br>
                      

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary"> Login </button>
                            <p class="float-right mt-2"> Don't have an account?  <a href="{{ url('user-registration')}}" class="text-success"> Register </a> </p>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
    </div>
    </section>

      <br><br>
    <footer id="footer" class="footer">

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

    </footer>
      
    <script>
        $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    });
    </script>
    </body>
    </html>