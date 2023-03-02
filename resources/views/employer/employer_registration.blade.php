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
          
              <li><a class="getstarted scrollto" style="background-color:#ef6603;" href="{{url('registration')}}">Sign In</a></li>
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
                <h4>Provide your accurate details</h4>
            </div>
            <div class="card-body">
            @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp
                                    </div>
                                @endif

            
              <div class="col-lg-12">

              <form method="post" action=" {{ url('user-store') }} ">
              <div class="row gy-4">

              <div class="col-md-6">
                      <label for="first_name"> First Name </label>
                      <input type="text" name="employer_first_name" id="employer_first_name" class="form-control" placeholder="Enter First Name" value="{{ old('employer_first_name') }}"/>
                      {!! $errors->first('employer_first_name', '<small class="text-danger">:message</small>') !!}
                  </div>
                  <br>

                  <div class="col-md-6">
                      <label for="last_name"> Last Name </label>
                      <input type="text" name="employer_last_name" id="employer_last_name" class="form-control" placeholder="Enter Last Name" value="{{ old('employer_last_name') }}"/>
                      {!! $errors->first('employer_last_name', '<small class="text-danger">:message </small>') !!}
                  </div>
                  <br>


                  

                  <div class="col-md-12">
                      <label for="email">Personal  E-mail Address </label>
                      <input type="text" name="personal_email" id="personal_email" class="form-control" placeholder="Enter Personal E-mail" value="{{ old('personal_email') }}"/>
                      {!! $errors->first('personal_email', '<small class="text-danger">:message</small>') !!}
                  </div>
                  <br>
                  <div class="form-group">
                      <label for="phone"> Employer Phone </label>
                      <input type="phone" name="employer_phone" id="employer_phone" class="form-control" placeholder="Enter Phone Number" value="{{ old('phone') }}">
                      {!! $errors->first('employer_phone', '<small class="text-danger">:message</small>') !!}
                  </div>

                  <div class="form-group">
                      <label for="password"> Password </label>
                      <input type="password" name="password" id="employer_password" class="form-control" placeholder="Enter Password" value="{{ old('password') }}"/>
                      {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                  </div>
                  <br>


                  <div class="form-group">
                      <label for="confirm_password"> Confirm Password </label>
                      <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" value="{{ old('confirm_password') }}">
                      {!! $errors->first('confirm_password', '<small class="text-danger">:message</small>') !!}
                  </div>
                  <br>

                  
              </div>
              <br>

              <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary"> Register </button>
              <p class="float-right mt-2"> Already have an account?  <a href="{{ url('user-login')}}" class="text-success"> Login </a> </p>
              </div>
              @csrf
          </div>
            </div>
      </form>

              </div>
            </div>
          </div>


            </div>
        </div>
    </div>
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


    <script>
        $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
    </body>
    </html>