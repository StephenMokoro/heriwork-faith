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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  <h3 style="text-align:center; color:black; font-weight:bolder;">Log In</h3>
   <br>
   <h4 style="text-align:center; color:#555;" > Don't have an account? &nbsp; Create Account</h4>
  <div class="row">
    <div class="col-lg-12 ">
      <div class="bg-white rounded-lg shadow-sm p-5">
      
<form class="row g-5">
<div class="col-12">
    <label for="inputAddress" class="form-label">Email</label>
   <br> <input type="email" name="student_email" class="form-control" id="student_email" placeholder="example@gmail.com">
  </div>

  <div class="col-12">
    <label for="password" class="form-label">Password</label>
   <br> <input type="password" name="student_password" class="form-control" id="password" >
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign In</button>
  </div>
</form>

</div>
<br><br>
<h3 style="text-align: center;color:black;">Login Credentials</h3>
<br><br>
<button type="button" class="btn btn-primary btn-lg btn-block"><a href="{{url('employer_login')}}" style="color:white;">Log In as Employer &nbsp;</a> <i class="bi bi-arrow-right"></i>
 </button>
  <br><br>
<button type="button" class="btn btn-primary btn-lg btn-block"><a href="{{url('org_login')}}" style="color:white;">Log In as Employer &nbsp;</a> <i class="bi bi-arrow-right"></i> </button>
<script>
    $(function() {
  $('[data-toggle="tooltip"]').tooltip()
});
</script>
</body>
</html>