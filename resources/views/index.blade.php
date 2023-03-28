    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Heriwork</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <link href="{{url('assets/img/logo/logo2.png')}}">
        <link href="{{url('assets/img/logo/logo2.png')}}">
        @include('header-links')

    </head>

    <body>
        @include('sweetalert::alert')

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                <a href="{{url('/')}}" class="logo d-flex align-items-center">
                    <img src="{{url('assets/img/logo/logo2.png')}}" alt="">
                </a>


                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link " href="{{url('partner-details')}}">Partner With Us</a></li>
                        <li><a class="nav-link " href="#" style="color:#ef6603;">Donate</a></li>

                        <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                        <li><a class="getstarted scrollto border text-black" style="background-color:#fff;color:#05115d; opacity: 0.9" href="{{url('signin')}}">Sign In</a></li>
                        <li><a class="getstarted scrollto" href="{{url('signup')}}">Sign Up</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Heriwork</h1>
                        <h3 data-aos="fade-up" class="mt-1 text-secondary">Unlocking a future and a hope</h3>
                        <h2 class="custom-line-height1" data-aos="fade-up" data-aos-delay="400">We collaborate to expand paid workstudy jobs and internship opportunities for underprivileged college students to generate some income for upkeep and fees.</h2>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <div class="text-center text-lg-start">
                                <a href="{{url('signup')}}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span> Get started</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->

        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about" class="about">

                <div class="container" data-aos="fade-up">
                    <div class="row gx-0">
                        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="content">
                                <h6 class="text-danger">WHO WE ARE</h6>
                                <h1 class="text-black"><b>Our purpose</b></h1>
                                <h4 class="custom-line-height1">
                                    We are an impact startup working with individual to extend paid work-study and internship opportunities to underprivileged college students to help them raise income for their upkeep and fees.
                                </h4>
                                <div class="text-center text-lg-start mt-4">
                                    <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span style="background-color:#ef6603;">Read More</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                            <img src="{{url('assets/img/heriwork.jpeg')}}" class="img-fluid" alt="">
                        </div>

                    </div>
                </div>

            </section><!-- End About Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services">

                <div class="container" data-aos="fade-up">

                    <header class="section-header mb-5">
                        <h6 class="text-danger text-center"> SERVICES</h6>
                        <h1 class=" text-center mb-3" style="color: #05115d;"><b>Engage our students</b></h1>
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <h4 class="text-black float-left">Our impact employers have engaged our students in varying tasks depending on their needs.The example below will get you started</h4>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </header>

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-box blue">
                                <i class="bi bi-file-earmark-spreadsheet  fa-3x"></i>

                                <h3>Data entry and record keeping</h3>
                                <p>Entering data into different computer databases, manage and maintaining record keeping.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-box orange">
                                <i class="bi bi-card-checklist fa-3x"></i>
                                <h3>Filing and organizational support</h3>
                                <p>Handling assignments within their departments and filing documents</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-box green">
                                <i class="bi bi-badge-vr fa-3x"></i>
                                <h3>Virtual assistance and administrative support</h3>
                                <p>Respond to emails and phone calls and offer administrative support to clients.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="service-box red">
                                <i class="bi bi-telephone-forward fa-3x"></i>
                                <h3>Customer service and support</h3>
                                <p>Provide technical assistance with products and answer customers questions.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="service-box purple">
                                <i class="bi bi-bank2 fa-3x"></i>
                                <h3>Telemarketing and sale support.</h3>
                                <p>Analyzing, identifying trends in customer interactionsand scheduling posts to be used in online platforms </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                            <div class="service-box pink">
                                <i class="bi bi-laptop fa-3x"></i>

                                <h3>Technical support</h3>
                                <p>Help customers with troubleshooting, maintenance, installation, configuration and upgrading of hardware and software.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </section><!-- End Services Section -->


            <!-- ======= Values Section ======= -->
            <section id="values" class="values ">

                <div class="container" data-aos="fade-up">

                    <header class="section-header mb-5">
                        <h1 class="text-center" style="color: #05115d;"> Recently posted jobs</h1>

                    </header>

                    <br>
                    <div class="row">
                        <!-- section starts here -->

                        <div class="col-lg-6 mb-5 col-project-card">
                            <div class="card border mb-4 project-card">
                                <div class="highlight">
                                    <span class="details ml-4 mt-5" style="background-color: #ef6603; color:#fff;">Upcoming</span>
                                </div>
                                <div class="card-body p-0 ml-0 mr-0 mt-4 mb-0">
                                    <div class="row">
                                        <div class="col-lg-12 ps-5 pe-5 pt-5">
                                            <a href="">
                                                <h3 class="card-title text-black un_ mt-5 line-height"><b>Article writing</b> </h3>
                                            </a>

                                            <p class="card-text line-height">Conducting thorough research on industry-related topics, generating ideas for new content types and proofreading articles before publication. If you're familiar with producing online content and have an eye for detail.</p>

                                            <div class="col-lg-12 project-card-image-small mb-4 d-sm-block d-lg-none d-md-none" style="background-image:url('/assets/img/geography-kenya.jpeg');">
                                            </div>

                                            <div class="bg-green pt-4 pb-2 ps-4 pe-4 mb-4" style="border-left: 10px solid rgba(212, 172, 13,0.8);">
                                                <h5 class="mb-4 mt-2"><a class="btn btn-warning" href="{{url('student-login')}}"><b>Apply now!</b></a></h5>
                                                <h6 class="mb-2 mt-2 text-black"><span style="color: red;">Apply by date — &nbsp;</span>@php $today = date('Y-m-d'); $stop_date = date('Y-m-d', strtotime('+1 day')); echo date('j F, Y', strtotime($stop_date)); @endphp</h6>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row card-body">
                                    <div class="col-lg-12 ps-2 pe-2 mt-2 order-sm-1 order-md-1 order-lg-2">
                                        <div class="col-lg-12 ps-2 pe-2">
                                            <h4 class="text-black">Skills</h4>
                                        </div>
                                        <div style="display: flex;flex-flow: row wrap; justify-content: left; align-items: left;">
                                            <a href="#" class=" btn btn-secondary rounded-pill ps-2 pe-2 pt-1 pb-1 m-1 " rel="tag">Creative writing</a>
                                            <a href="#" class="btn btn-secondary rounded-pill ps-2 pe-2 pt-1 pb-1 m-1 " rel="tag">Editing skills</a>
                                            <a href="#" class="btn btn-secondary rounded-pill ps-2 pe-2 pt-1 pb-1 m-1 " rel="tag">Research skills</a>
                                            <a href="#" class="btn btn-secondary rounded-pill ps-2 pe-2 pt-1 pb-1 m-1 " rel="tag"> Content Strategy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Section ends here -->

                        <!-- Section starts here -->
                        <div class="col-lg-6  mb-5 col-project-card">
                            <div class="card border mb-4 project-card">
                                <div class="highlight">
                                    <span class="details ml-4 mt-5" style="background-color: #ef6603; color:#fff;">Upcoming</span>
                                </div>
                                <div class="card-body p-0 ml-0 mr-0 mt-4 mb-0">
                                    <div class="row">
                                        <div class="col-lg-12 ps-5 pr-5 pt-5">
                                            <a href="">
                                                <h3 class="card-title text-black un_ mt-5 line-height"><b>Website development</b> </h3>
                                            </a>
                                            <p class="card-text line-height">It involves makes and maintains websites,handle the technical aspects of a website, including its performance (website speed) and capacity (the maximum amount of traffic the site could handle at a given time)...</p>

                                            <div class="col-lg-12 project-card-image-small mb-4 d-sm-block d-lg-none d-md-none" style="background-image:url('/assets/img/geography-kenya.jpeg');">
                                            </div>

                                            <div class="bg-green pt-4 pb-2 ps-4 ps-4 mb-4" style="border-left: 10px solid rgba(212, 172, 13,0.8);">
                                                <h5 class="mb-4 mt-2"><a class="btn btn-warning" href="{{url('student-login')}}"><b>Apply now!</b></a></h5>

                                                <h6 class="mb-2 mt-2 text-black"><span style="color: red;">Apply by date — &nbsp;</span>@php $today = date('Y-m-d'); $stop_date = date('Y-m-d', strtotime('+1 day')); echo date('j F, Y', strtotime($stop_date)); @endphp</h6>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row card-body">
                                    <div class="col-lg-12 ps-2 pe-2 mt-2 order-sm-1 order-md-1 order-lg-2">
                                        <div class="col-lg-12 ps-2 pe-2">
                                            <h4 class="text-black">Skills</h4>
                                        </div>
                                        <div style="display: flex;flex-flow: row wrap; justify-content: left; align-items: left;">
                                            <a href="#" class="btn btn-secondary rounded-pill ps-2 pe-2 pt-1 pb-1 m-1 " rel="tag">Debugging skills</a>
                                            <a href="#" class="btn btn-secondary rounded-pill ps-2 pe-2 pt-1 pb-1 m-1 " rel="tag">Problem solving skills</a>
                                            <a href="#" class="btn btn-secondary rounded-pill ps-2 pe-2 pt-1 pb-1 m-1 " rel="tag">Database management</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12 text-center mb-4">
                            <a href="#" class="btn border-0 explore btn btn-primary" style="color:#fff;">Load more projects</a>
                        </div>

                    </div>



                </div>

            </section><!-- End Values Section -->

            <!-- ======= partners Section ======= -->
            <section id="partner" class="partner">

                <div class="container" data-aos="fade-up">

                    <header class="section-header mb-5">
                        <h1 class=" text-center" style="color: #05115d;">Trusted by </h1>

                    </header>

                    <div class="clients-slider swiper ">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img src="assets/img/clients/ilab.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/ilab.png" class="img-fluid" alt=""></div>

                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                    <br><br>
                    <div class="col-lg-12 text-center mb-4">
                        <a href="#" class="btn border-0 explore btn btn-primary" style="color:#fff;">Explore more partners</a>
                    </div>
                </div>

            </section><!-- End trustedby Section -->


            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">

                <div class="container" data-aos="fade-up">

                    <header class="section-header mb-5">
                        <h1 class=" text-center" style="color: #05115d;"> Contact</h1>

                    </header>
                    <br>
                    <div class="row gy-4">

                        <div class="col-lg-6">

                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="info-box">
                                        <i class="bi bi-geo-alt"></i>
                                        <h3>Address</h3>
                                        <p>Strathmore University</p>
                                        <p>Nairobi</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-box">
                                        <i class="bi bi-telephone"></i>
                                        <h3>Call Us</h3>
                                        <p>+24512345678<br></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-box">
                                        <i class="bi bi-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p>engageus@heriwork.com</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-box">
                                        <i class="bi bi-clock"></i>
                                        <h3>Open Hours</h3>
                                        <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                            @endif
                            <form action="{{route('contact-page')}}" method="POST" class="">
                                @csrf
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                        <span class="text-danger"> @error('name'){{$message}} @enderror</span>

                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                        <span class="text-danger"> @error('email'){{$message}} @enderror</span>

                                    </div>

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                        <span class="text-danger"> @error('subject'){{$message}} @enderror</span>

                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                        <span class="text-danger"> @error('message'){{$message}} @enderror</span>

                                    </div>

                                    <div class="col-md-12 text-center">

                                        <button class="btn btn-primary" type="submit">Send Message</button>
                                    </div>
                            </form>

                        </div>


                    </div>

                </div>

            </section><!-- End Contact Section -->

        </main><!-- End #main -->

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
                            <a href="{{url('/')}}" class="logo d-flex align-items-center">
                                <img src="{{url('assets/img/logo/logo2.png')}}" alt="">
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

        @include('footer-links')
        <script>
            let images = document.querySelectorAll('.onzoom');

            images.forEach(pic => {
                pic.addEventListener('onhover', function zoomPic(event) {
                    console.log('pic hovered', event);

                    pic.setAttribute('style', 'transform: scale(1.5);');
                });
            });
        </script>
    </body>

    </html>