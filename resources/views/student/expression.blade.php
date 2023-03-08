<!DOCTYPE html>
              <html>

              <head>
                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
              </head>

              <!-- Google Fonts -->
              <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

              <!-- Vendor CSS Files -->
              <link href="assets/vendor/aos/aos.css" rel="stylesheet">
              <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
              <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
              <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
              <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
              <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

              <!-- Template Main CSS File -->
              <link href="assets/css/style.css" rel="stylesheet">


              </head>

              <body>

                <!-- ======= Header ======= -->
                <header id="header" class="header fixed-top">
                  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                    <a href="{{url('/')}}" class="logo d-flex align-items-center">
                      <span style="color:#ef6603;">Heriwork</span>
                    </a>

                    <nav id="navbar" class="navbar">
                      <ul>
                        <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
                        <li><a class="getstarted scrollto border text-black" style="background-color:#fff;color:#05115d; opacity: 0.9" href="{{url('student_login')}}">Sign In</a></li>
                      </ul>
                      <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->

                  </div>
                </header><!-- End Header -->
                <br><br><br>
                <div class="container mt-4">
                  <div class="row">
                    <div class="col-md-8 offset-md-2">
                      <div class="card">
                        <div class="card-header">
                          <h6></h6>
                          <h4>Provide your accurate details</h4>
                        </div>
                        <div class="card-body">
                          
                          <div class="col-lg-12">
                            <form action="{{ route('sample.validate_registration') }}" method="POST" class="">
                              @csrf
                              <div class="row gy-4">
                                <div class="col-md-12">
                                  <select class="itemName form-control" name="school_name" id="school"></select>
                                  @if ($errors->has('school_name'))
                                  <span class="text-danger">{{ $errors->first('school_name') }}</span>
                                  @endif
                                </div>
                                <p>If your school is not listed below please fill up the form below. We will contact you. </p>

                                <div class="col-md-12">
                                  <input type="text" name="others" class="form-control" placeholder="Add school">
                                  @if ($errors->has('others'))
                                  <span class="text-danger">{{ $errors->first('others') }}</span>
                                  @endif
                                </div>
                                <div class="col-md-6">
                                  <input type="text" name="student_first_name" class="form-control" placeholder="Your first name" required>
                                  @if ($errors->has('student_first_name'))
                                  <span class="text-danger">{{ $errors->first('student_first_name') }}</span>
                                  @endif
                                </div>
                                <div class="col-md-6">
                                  <input type="text" name="student_last_name" class="form-control" placeholder="Your last name" required>
                                  @if ($errors->has('student_last_name'))
                                  <span class="text-danger">{{ $errors->first('student_last_name') }}</span>
                                  @endif
                                </div>
                                

                                <div class="col-md-12">
                                  <input type="text" name="student_email" class="form-control" placeholder="Your school email" required>
                                  @if ($errors->has('student_email'))
                                  <span class="text-danger">{{ $errors->first('student_email') }}</span>
                                  @endif
                                </div>
                                <div class="col-md-12">
                                  <input type="text" name="student_phone" class="form-control" placeholder="Your phone number" required>
                                  @if ($errors->has('student_phone'))
                                  <span class="text-danger">{{ $errors->first('student_phone') }}</span>
                                  @endif
                                </div>

                                
                                
                                <div class="col-md-12 text-center">

                                  <button class="btn btn-primary" type="submit">Register</button>
                                </div>
                                <div class="col-md-12 text-center">
                                  <p> <a href="{{url('student_login')}}">Already have an account? Sign In</a>
                                </div>
                                </p>
                              </div>
                            </form>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ======= Footer ======= -->
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


                </footer><!-- End Footer -->
              </body>
              <script type="text/javascript">
                $('.itemName').select2({
                  placeholder: 'Select School',
                  ajax: {
                    url: '/select2-autocomplete-ajax',
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                      return {
                        results: $.map(data, function(item) {
                          return {
                            text: item.school_name,
                            id: item.id
                          }
                        })
                      };
                    },
                    cache: true
                  }
                });
              </script>

              </html>