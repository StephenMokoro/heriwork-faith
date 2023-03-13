<!--  
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <span style="color:#ef6603;">Heriwork</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="#partner">Partner With Us</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            
              <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            <li><a class="getstarted scrollto border text-black" style="background-color:#fff;color:#05115d; opacity: 0.9" href="{{url('employer_login')}}">Sign In</a></li>
        <li><a class="getstarted scrollto" href="{{url('signup')}}">Sign Up</a></li>

            </ul>
         
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header> -->


<!-- End Header -->

<!-- <div class="container">
        <div class="row">
            <div class="col-md-4-offset-4" style="margin-top:20px;">
           <h3>Welcome to dashboard</h3>
           <hr>
           <table class="table">
            <thead><th>name</th><th>Action</th></thead>
            <tbody>
                <tr>
                    <td>{{$data->employer_full_name}}</td>
                    <td><a href="logout">logout</a></td>
                </tr>

                
            </tbody>

           </table>
        </div>
        </div>
    </div> -->
<!-- Credit card form -->
<!--  -->
<!-- Credit card form -->
<!-- Vendor JS Files -->
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

  <style type="text/css">
    .nav-pills .nav-link {
      background: white;
      color: rgba(5, 17, 93, 0.9);
      font-weight: 600;
    }


    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      background: white;
      color: rgba(5, 17, 93, 0.9);
      border-bottom: 2px solid #000;
      border-radius: 0 !important;
      font-weight: 600
    }

    /*  this skips the first div and puts a border top on the subsequent ones      */

    .job-row>.col-job-card:not(:first-of-type) {
      border-top: 1px solid #ccc;
    }
  </style>

</head>

<body>
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <span style="color:#ef6603;">Heriwork</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto active" href="{{url('/')}}"><i class="bi bi-person-circle" style="font-size: larger;font-weight:400;"></i></a></li>

         
          <li class="dropdown"  ><a href="#" ><span></span> <i class="bi bi-chevron-down"></i></a>

            <ul>
              <li><a href="#">Post a job</a></li>
              <li><a href="#">My jobs</a></li>
            
            </ul>
          </li>
          <a href="logout" class="btn pl-4 pr-4 ml-3 mr-3 border hover" style="font-size:14px; background-color:#05115d; color:white;">logout</a>
          <!-- <li><a class="getstarted scrollto border text-black" style="background-color:#fff;color:#05115d; opacity: 0.9" href="{{url('employer_login')}}">Sign In</a></li>
          <li><a class="getstarted scrollto" href="{{url('signup')}}">Sign Up</a></li> -->

        </ul>


        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <br><br>
  <div class="container">
    <br><br>

    <div class="row job-row border-top border pl-0 pr-0 rounded-4" style="width:100%; height:25vh">
      <h3 class="text-black">
        <div class="row mt-4">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body p-0 ml-0 mr-0 mb-0">
                <div class="row  pl-5 pr-5">
                  <div class="col-lg-12">
                    <span class="card-title  line-height" style="font-weight: 700; color:#05115d;">Your Dashboard</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
          
            <a href="{{url('internship')}}"  class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border hover" style="font-size:14px; background-color:#05115d; color:white;"> Post a job</a>
        </div>
        </div>
      </h3>
      <div class="col-lg-12 col-job-card">
        <div class="card mb-4">
          <div class="card-body p-0 ml-0 mr-0 mt-4 mb-0">
            <div class="row  pl-5 pr-5">
              <div class="col-lg-12 mb-3">
                <a href="#">
                </a>
              </div>

              <div class="col-lg-4">
                <h6 class="text-secondary" style="font-weight: bold;font-size:larger;"> Welcome  <span style="color:#05115d; font-weight:bold; font-size:large;">{{$data->employer_first_name}}</span> </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">

      <div class="col-lg-8">
        <div class="card">
          <div class="card-body">
            <!-- <h5 class="card-title">Special title treatment</h5> -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Posted Jobs</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Draft Jobs</button>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row job-row border-top border pl-0 pr-0 rounded">
              <h3 class="text-black">
                <div class="row mt-4">
                  <div class="col-lg-8">
                    <div class="card">
                      <div class="card-body p-0 ml-0 mr-0 mb-0">
                        <div class="row  pl-5 pr-5">
                          <div class="col-lg-12">
                            <span class="card-title text-black line-height" style="font-weight: 700;">Your Postings </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4"><a href="#" style="font-size:14px;">See all postings</a></div>
                </div>
              </h3>
              <div class="col-lg-12 col-job-card">
                <div class="card mb-4">
                  <div class="card-body p-0 ml-0 mr-0 mt-4 mb-0">
                    <div class="row  pl-5 pr-5">
                      <div class="col-lg-12 mb-3">
                        <a href="#">
                          <h5 class="card-title text-black line-height" style="font-weight: 600;">Combating climate change through satellite image analysis </h5>
                        </a>
                      </div>

                      <div class="col-lg-4">
                        <h6 class="text-secondary">Fixed-Price</h6>
                        <h6 class="text-secondary">Created 4 minutes ago</h6>
                      </div>

                      <div class="col-lg-8">
                        <div class="row">
                          <div class="col-lg-4 text-center">
                            <h6><a href="#" class="text-primary"> 38 </a></h6>
                            <h6 class="text-secondary">Applications</h6>
                          </div>
                          <div class="col-lg-4 text-center">
                            <h6 class="text-secondary">8</h6>
                            <h6 class="text-secondary">Hired</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-12 col-job-card">
                <div class="card mb-4">
                  <div class="card-body p-0 ml-0 mr-0 mt-4 mb-0">
                    <div class="row  pl-5 pr-5">
                      <div class="col-lg-12 mb-3">
                        <a href="#">
                          <h5 class="card-title text-black line-height" style="font-weight: 600;">Today I don't feel like doing anything, nothing at all </h5>
                        </a>
                      </div>

                      <div class="col-lg-4">
                        <h6 class="text-secondary">Fixed-Price</h6>
                        <h6 class="text-secondary">Created 10 minutes ago</h6>
                      </div>

                      <div class="col-lg-8">
                        <div class="row">
                          <div class="col-lg-4 text-center">
                            <h6><a href="#" class="text-primary"> 108 </a></h6>
                            <h6 class="text-secondary">Applications</h6>
                          </div>
                          <div class="col-lg-4 text-center">
                            <h6 class="text-secondary">100</h6>
                            <h6 class="text-secondary">Hired</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row job-row border-top border pl-0 pr-0 rounded">
              <h3 class="text-black">
                <div class="row mt-4">
                  <div class="col-lg-8">
                    <div class="card">
                      <div class="card-body p-0 ml-0 mr-0 mb-0">
                        <div class="row  pl-5 pr-5">
                          <div class="col-lg-12">
                            <span class="card-title text-black line-height" style="font-weight: 700;">Your Drafts </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4"><a href="#" style="font-size:14px;">See all drafts</a></div>
                </div>
              </h3>
              <div class="col-lg-12 col-job-card">
                <div class="card mb-4">
                  <div class="card-body p-0 ml-0 mr-0 mt-4 mb-0">
                    <div class="row  pl-5 pr-5">
                      <div class="col-lg-12 mb-3">
                        <a href="#">
                          <h5 class="card-title text-black line-height" style="font-weight: 600;">Combating climate change through satellite image analysis </h5>
                        </a>
                      </div>

                      <div class="col-lg-4">
                        <h6 class="text-secondary">Saved 4 minutes ago</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>







          </div>
        </div>
      </div>
      <div class="col-lg-4 pl-5 mt-5">
        <div class="row mt-5">
          <div class="card mb-4 border">
            <div class="card-body p-0 m-0">
              <div class="row  pl-3 pr-3 pt-4">
                <div class="col-lg-12 mb-3">
                  <a href="#">
                    <h3 class="card-title text-black line-height" style="font-weight: 700;">Want to post an internship?</h3>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

</script>

  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>