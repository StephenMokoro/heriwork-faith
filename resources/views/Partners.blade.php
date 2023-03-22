<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Heriwork</title>
    @include('header-links')

</head>

<body>
    <!-- ======= Header ======= -->
    @include('sweetalert::alert')

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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
        <h6 class="text-end"><a href="{{url('/')}}">Home</a>< Partner with us</h5>

            <br>
            <h3 style="text-align:center;">Please fill the form below </h3>
            <br>
            <form action="{{route('partner-page')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
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

                    <div class="col-md-6">
                        <div class="card border mb-3">
                            <div class="card-header">
                                <b>Personal details</b>
                            </div>
                            <div class="card-body">
                                <br>

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter company name">
                                    <span class="text-danger"> @error('company_name'){{$message}} @enderror</span>

                                </div>

                                <br>
                                    <div class="col-md-12 mb-3">
                                        <input type="email" class="form-control" id="comapny_email" name="company_email" placeholder="Enter company email">
                                        <span class="text-danger"> @error('company_email'){{$message}} @enderror</span>

                                    </div>
                              <br>
                                <div class="mb-3">
                                    <select class="form-select" id="category" name="company_category">
                                        <option selected>Choose company category</option>
                                        <option value="bank">Bank</option>
                                        <option value="school">School</option>
                                    </select>
                                    <span class="text-danger"> @error('company_category'){{$message}} @enderror</span>

                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border mb-3">
                            <div class="card-header">
                                <b> Social links</b>
                            </div>
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div id="multiple_feature_part">
                                        <div class="row justify-content-center">
                                            <div class="form-group col-md-4">
                                                <select class="form-control " name="social_link">
                                                    <option value="" class="d-none" disabled="">Select One</option>
                                                    <option value="facebook">Facebook</option>
                                                    <option value="twitter">Twitter</option>
                                                    <option value="instagram">Instagram</option>
                                                    <option value="youtube">Youtube</option>
                                                    <option value="linkedin">Linkedin</option>
                                                    <option value="pinterest">Pinterest</option>
                                                    <option value="reddit">Reddit</option>
                                                    <option value="github">GitHub</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <br><br>

                                            <div class="form-group col-md-6 mb-4">
                                                <input type="url" name="social_url" class="form-control" placeholder="Enter url">
                                            </div>

                                            <div class="form-group col-md-2">
                                                <a role="button" class="btn bg-primary text-light">
                                                    <i class="fas fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <span class="text-danger"> @error('social_link'){{$message}} @enderror</span>


                                    <!-- <div class="col-8 ">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter url" name="social_url">
                                        <span class="text-danger"> @error('social_url'){{$message}} @enderror</span>

                                    </div> -->
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>

        </div>
        </form>
        </div>

        </div>
    </section>

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

    @include('footer-links')
    <script>
        let div_container = document.getElementById("multiple_feature_part");

        //div row with inputs 
        let row_div = document.getElementsByClassName("row justify-content-center")[0];


        //get all buttons(anchors)
        let anchor_buttons = document.getElementsByClassName("btn bg-primary text-light");

        //loop through each button, adding click listener
        for (let i = 0; i < anchor_buttons.length; i++) {
            anchor_buttons[i].addEventListener(
                "click",
                function(e) {
                    //duplicate row_div
                    let new_el = row_div.cloneNode(true);

                    //turn button from blue to red
                    new_el.children[new_el.children.length - 1].children[0].className = "btn bg-danger text-light"

                    //change plus to minus
                    new_el.children[new_el.children.length - 1].children[0].children[0].className = "fa fa-minus";

                    // clear input
                    // new_el.children[1].children[0].value='';
                    //add event listener to delete clone if clicked
                    new_el.children[new_el.children.length - 1].children[0].addEventListener(
                        "click",
                        function(e) {
                            new_el.remove();
                        }
                    )

                    //attach cloned row_div to div_container
                    div_container.appendChild(new_el);
                }
            )
        }
    </script>


</body>

</html>