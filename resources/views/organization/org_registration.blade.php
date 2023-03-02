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

      <a href="index.html" class="logo d-flex align-items-center">
        <span style="color:#ef6603;" >Heriwork</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Find Job</a></li>
           <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" style="background-color:#ef6603;" href="{{url('registration')}}">Sign In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <div class="container ">

  <br><br><br><br><br><br>

  <h3 style="text-align:center; color:black; font-weight:bolder;">Create Account</h3>
   <br>
   <h4 style="text-align:center; color:#555;" > Already have an account? &nbsp; Log In</h4>

  <div class="row">
    <div class="col-lg-12 ">
      <div class="bg-white rounded-lg shadow-sm p-5">
     
        <ul role="tablist" class="nav nav-pills rounded-pill nav-fill mb-3">
          <li class="nav-item">
            <a data-toggle="pill" href="{{url('student_registration')}}" class="nav-link  rounded-pill">
              <i class="fa fa-credit-card"></i>
                Student
             </a>
          </li>
          <li class="nav-item">
            <a data-toggle="pill" href="{{url('employer_registration')}}" class="nav-link rounded-pill">
               <i class="fa fa-paypal"></i>
                Employer
            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="pill" href="{{url('org_registration')}}" class="nav-link active rounded-pill">
              <i class="fa fa-university"></i>
                 Organization
            </a>
          </li>
        </ul>
        <!-- End -->
<form class="row g-3">
  <div class="col-md-6">
    <label for="Firstname" class="form-label">First Name</label>
    <input type="text" name="org_first_name" class="form-control" id="first_name">
  </div>
  <div class="col-md-6">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" name="org_last_name" class="form-control" id="last_name">
  </div>
  <div class="col-md-6">
    <label for="orgemail" class="form-label">Organization email</label>
    <input type="email" name="org_email" class="form-control" id="org_email">
  </div>
  <div class="col-md-6">
    <label for="personalemail" class="form-label">Personal Email</label>
    <input type="email" name="org_personal_email" class="form-control" id="personal_email">
  </div>
  <div class="col-12">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="org_password"  class="form-control" id="org_password" placeholder=".....">
  </div>

  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Phone Number</label>
    <input type="email" name="org_phone" class="form-control" id="org_phone">
  </div>
  
  <div class="col-12">
    <label for="org_name" class="form-label">Organization Name</label>
    <input type="text" name="org_name" class="form-control" id="org_name" >
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign Up</button>
  </div>
</form>

      

</div>
<script>
    $(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>