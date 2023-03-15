              <!DOCTYPE html>
              <html>

              <head>
                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
                <script src="https://kit.fontawesome.com/1c2c2462bf.js" crossorigin="anonymous"></script>

                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>

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
                <section id="hero" class="hero d-flex align-items-center">
                  <br><br>
                  <div class="container mt-4">
                    <div class="row">
                      <div class="col-md-8 offset-md-2">
                        <div class="card">
                          <div class="card-header">
                            <h6></h6>
                            <h4>Welcome to Heriwork</h4>
                          </div>
                          <div class="card-body">

                            <div class="col-lg-12">
                              <form action="{{ route('sample.validate_registration') }}" method="POST" class="">
                                @csrf
                                <div class="row gy-4">
                                  <br>
                                  <div class="col-md-12">
                                    <select class="itemName form-control" name="school_name" id="school"></select>
                                    @if ($errors->has('school_name'))
                                    <span class="text-danger">{{ $errors->first('school_name') }}</span>
                                    @endif
                                  </div>
                                  <p>If your school is listed kindly contact the Financial aid student office for further guidance. Else, if school not listed please provide accurate details in the form below </p>

                                  <div class="col-md-12">
                                    <input type="text" name="others" class="form-control" placeholder="Add school name">
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
                                  <div class="form-group">
                                    <label class="col-md-12 control-label" for="passwordinput">
                                      Password
                                    </label>
                                    <div class="col-md-12">
                                      <input id="password" class="form-control input-md" name="password" type="password" value="{{ $product->password ?? '' }}" placeholder="Enter your password">
                                      <span class="show-pass" onclick="toggle()">
                                        <i class="far fa-eye" onclick="myFunction(this)"></i>
                                      </span>
                                      <div id="popover-password">
                                        <p><span id="result"></span></p>
                                        <div class="progress">
                                          <div id="password-strength" class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                          </div>
                                        </div>
                                        <ul class="list-unstyled">
                                          <li class="">
                                            <span class="low-upper-case">
                                              <i class="fas fa-circle" aria-hidden="true"></i>
                                              &nbsp;Lowercase &amp; Uppercase
                                            </span>
                                          </li>
                                          <li class="">
                                            <span class="one-number">
                                              <i class="fas fa-circle" aria-hidden="true"></i>
                                              &nbsp;Number (0-9)
                                            </span>
                                          </li>
                                          <li class="">
                                            <span class="one-special-char">
                                              <i class="fas fa-circle" aria-hidden="true"></i>
                                              &nbsp;Special Character (!@#$%^&*)
                                            </span>
                                          </li>
                                          <li class="">
                                            <span class="eight-character">
                                              <i class="fas fa-circle" aria-hidden="true"></i>
                                              &nbsp;Atleast 8 Character
                                            </span>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <input type="text" name="password" class="form-control" placeholder="Password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                  </div>
                                  <div class="col-md-12">
                                    <input type="text" name="student_phone" class="form-control" placeholder="Confirm password" required>
                                    @if ($errors->has('student_phone'))
                                    <span class="text-danger">{{ $errors->first('student_phone') }}</span>
                                    @endif
                                  </div>



                                  <div class="col-md-12 text-center">

                                    <button class="btn btn-primary" style="background-color:rgba(5, 17, 93, 0.9);" type="submit">Submit</button>
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
                </section>
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
                  placeholder: 'Search School',
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
              <script>
                let state = false;
                let password = document.getElementById("password");
                let passwordStrength = document.getElementById("password-strength");
                let lowUpperCase = document.querySelector(".low-upper-case i");
                let number = document.querySelector(".one-number i");
                let specialChar = document.querySelector(".one-special-char i");
                let eightChar = document.querySelector(".eight-character i");

                password.addEventListener("keyup", function() {
                  let pass = document.getElementById("password").value;
                  checkStrength(pass);
                });

                function toggle() {
                  if (state) {
                    document.getElementById("password").setAttribute("type", "password");
                    state = false;
                  } else {
                    document.getElementById("password").setAttribute("type", "text")
                    state = true;
                  }
                }

                function myFunction(show) {
                  show.classList.toggle("fa-eye-slash");
                }

                function checkStrength(password) {
                  let strength = 0;

                  //If password contains both lower and uppercase characters
                  if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
                    strength += 1;
                    lowUpperCase.classList.remove('fa-circle');
                    lowUpperCase.classList.add('fa-check');
                  } else {
                    lowUpperCase.classList.add('fa-circle');
                    lowUpperCase.classList.remove('fa-check');
                  }
                  //If it has numbers and characters
                  if (password.match(/([0-9])/)) {
                    strength += 1;
                    number.classList.remove('fa-circle');
                    number.classList.add('fa-check');
                  } else {
                    number.classList.add('fa-circle');
                    number.classList.remove('fa-check');
                  }
                  //If it has one special character
                  if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
                    strength += 1;
                    specialChar.classList.remove('fa-circle');
                    specialChar.classList.add('fa-check');
                  } else {
                    specialChar.classList.add('fa-circle');
                    specialChar.classList.remove('fa-check');
                  }
                  //If password is greater than 7
                  if (password.length > 7) {
                    strength += 1;
                    eightChar.classList.remove('fa-circle');
                    eightChar.classList.add('fa-check');
                  } else {
                    eightChar.classList.add('fa-circle');
                    eightChar.classList.remove('fa-check');
                  }

                  // If value is less than 2
                  if (strength < 2) {
                    passwordStrength.classList.remove('progress-bar-warning');
                    passwordStrength.classList.remove('progress-bar-success');
                    passwordStrength.classList.add('progress-bar-danger');
                    passwordStrength.style = 'width: 10%';
                  } else if (strength == 3) {
                    passwordStrength.classList.remove('progress-bar-success');
                    passwordStrength.classList.remove('progress-bar-danger');
                    passwordStrength.classList.add('progress-bar-warning');
                    passwordStrength.style = 'width: 60%';
                  } else if (strength == 4) {
                    passwordStrength.classList.remove('progress-bar-warning');
                    passwordStrength.classList.remove('progress-bar-danger');
                    passwordStrength.classList.add('progress-bar-success');
                    passwordStrength.style = 'width: 100%';
                  }
                }
                if ($("#validateForm").length > 0) {
                  $("#validateForm").validate({
                    rules: {
                      employer_first_name: {
                        required: true,
                      },

                      employer_last_name: {
                        required: true,
                      },

                      personal_email: {
                        required: true,
                        maxlength: 60,
                        email: true,
                      },

                      employer_phone: {
                        required: true,
                      },

                      password: {
                        required: true,
                        minlength: 5
                      },

                      confirm_password: {
                        required: true,
                        minlength: 5,
                        equalTo: '[name="password"]'
                      }
                    },


                    messages: {
                      name: {
                        required: "Name is required.",
                      },
                      email: {
                        required: "Email is required.",
                        email: "It does not seem to be a valid email.",
                        maxlength: "The email should be or equal to 60 chars.",
                      },
                      confirm_password: {
                        equalTo: "Please enter the same password!"
                      },
                    },
                  })
                }
              </script>

              </html>