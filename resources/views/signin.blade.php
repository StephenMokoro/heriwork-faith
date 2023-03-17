<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Heriwork</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Google Fonts -->
    @include('header-links')


</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{url('/')}}" class="logo d-flex align-items-center">
                <span style="color:#ef6603;">Heriwork</span>
            </a>

            <nav id="navbar" class="navbar">

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
                <div class="row justify-content-center pl-5 pr-5 ">
                    <div class="  col-lg-5  pb-3 pt-3 rounded ">
                        <div class="  card rounded-3 border  " id="card_1">
                            <div class=" card-body">
                                <h5 class="card-title "> <b>Login as Student</b> </h5>
                                <p class="card-text">I am a student looking for paid work-study jobs or internship opportunities</p>
                                <a href="{{url('studentlogin')}}" class="btn btn-success">Proceed</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5   pb-3 pt-3 rounded">
                        <div class="card rounded-3  border" id="card_2">
                            <div class="card-body">
                                <h5 class="card-title"><b> Login as Impact Employer</b></h5>
                                <p class="card-text">I am an employer interested in providing paid opportunities for students </p>
                                <a href="{{url ('employerlogin')}}" class="btn btn-success">Proceed</a>
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
    </div>
    <script>
        const c1 = document.getElementById("card_1");
        const c2 = document.getElementById("card_2");
        const btn = document.getElementById("button1");
        const f = document.getElementsByTagName("form")[0];
        c1.addEventListener(
            "mouseleave", (event) => {
                event.target.style.border = " 1px gray solid";

            }
        );
        c2.addEventListener(
            "mouseleave", (event) => {
                event.target.style.border = " 1px gray solid";
            }
        );
        c1.addEventListener(
            "click",
            function() {
                f.action = "student_registration";
                btn.childNodes[0]["data"] = "Join as Student";
                btn.disabled = false;
            }
        );
        c2.addEventListener(
            "click",
            function() {
                f.action = "employer_registration";
                btn.childNodes[0]["data"] = "Join as Employer";
                btn.disabled = false;
            }

        );
    </script>

</body>

</html>