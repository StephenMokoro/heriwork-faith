<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heriwork</title>
    @include('header-links')
</head>

<body>
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{url('/')}}" class="logo d-flex align-items-center">
                <img src="{{url('assets/img/capture.PNG')}}" alt="">

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
                <h3 style="text-align:center; color:black; font-weight:bolder;"> We're excited you are interested</h3>
                <br>
                <div class="row justify-content-center pl-5 pr-5 ">
                    <div class="  col-lg-5  pb-3 pt-3 rounded-3 ">
                        <div class="  card rounded-3 p-3 border">
                            <div class=" card-body">
                                <h5 class="card-title "> <b>Join as Student</b> </h5>
                                <p class="card-text">I am a student in need of financial support and looking for paid opportunities to help fund my college education</p>
                                <a href="{{url('student-detail')}}" class="btn btn-success">Proceed as Student</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5  pb-3 pt-3">
                        <div class="card rounded-3 p-3 border">
                            <div class="card-body">
                                <h5 class="card-title"><b>Join as Impact Employer</b></h5>
                                <p class="card-text">I am an employer interested in providing paid workstudy jobs or internship opportunities to deserving college students </p>
                                <a href="{{url('employer-details')}}" class="btn btn-success">Proceed as Employer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p class="text-black">Already have an account ? <a href="{{url('signin')}}">Sign In</a> </p>
                </div>
            </div>
        </div>
    </section>
    @include('footer-links')

</body>

</html>