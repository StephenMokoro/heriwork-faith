@extends('layout')

@section('content')
<!-- <main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Reset Password</div>
                  <div class="card-body">
  
                    @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
  
                      <form action="{{ route('forget.password.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="personal_email" required autofocus>
                                  @if ($errors->has('personal_email'))
                                      <span class="text-danger">{{ $errors->first('personal_email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Send Password Reset Link
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main> -->
@endsection




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

    @include('header-links')


</head>

<body>
@include('sweetalert::alert')


    <!-- ======= Header ======= -->
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

        <div class="container mt-4">

            <div class="row ">
                <div class="col-md-8 offset-md-2">
                    <div class="card border">
                        <div class="card-header">
                           <h5><b>Reset Password</b></h5> 
                        </div>

                        <div class="card-body">
                            @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                            @endif
                            <div class="col-lg-12">
                                <form action="{{ route('studentforget.password.post') }}" method="POST">

                                    <div class="row gy-4">
                                        @csrf
                                        <div class="col-md-12">
                                            <input type="email" id="email_address" class="form-control" name="student_email" required autofocus placeholder="Enter email address">
                                            @if ($errors->has('student_email'))
                                            <span class="text-danger">{{ $errors->first('student_email') }}</span>
                                            @endif
                                        </div>



                                    </div>
                                    <br><br>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Send Password Reset Link
                                        </button>
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

</body>

</html>