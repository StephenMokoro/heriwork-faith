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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
              
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <section id="hero" class="hero d-flex align-items-center">
    <div class="container col-lg-7  ">
        <br><br> <br><br><br>
        <div class="  border  pb-5 pt-5  rounded-5">
            <h3 style="text-align:center; color:black; font-weight:bolder;"> Join as a Student or an Impact Employer</h3>
            <br>
            <div class="row justify-content-center pl-5 pr-5 ">
                <div class="  col-lg-6  pb-3 pt-3 " >
                    <div class="  card rounded-3  " id="card_1">
                        <div class=" card-body">
                            <h5 class="card-title "> <b>Student</b> </h5>
                            <p class="card-text">I am a student looking for paid work-study jobs or internship  opportunities</p>
                            <a href="{{url('student_registration')}}" class="btn btn-success">Sign Up</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6   pb-3 pt-3">
                    <div class="card rounded-3 " id="card_2">
                        <div class="card-body">
                            <h5 class="card-title"><b> Impact Employer</b></h5>
                            <p class="card-text">I am an employer interested in providing paid work-study jobs or internship opportunities </p>
                            <a href="{{url('employer_registration')}}" class="btn btn-success">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4"> 
                <p class="text-black">Already have an account ? <a href="{{url('login')}}">Sign In</a> </p>
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