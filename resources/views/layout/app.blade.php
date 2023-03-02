<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
    <link href="{{url('assets/css/dashboard.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet">

 
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
          <li><a class="nav-link scrollto" href="#about"> Job</a></li>
          <li><a class="nav-link scrollto" href="#services">Add Student</a></li>
          <li><a class="nav-link scrollto" href="{{url('viewemployer')}}">Employer</a></li>
          <li><a class="getstarted scrollto" style="background-color:#ef6603;" href="{{ route('logout') }}">Logout</a></li>
                
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <br><br><br><br>

  <div id="wrapper" class="toggle">
    <div class="container-fluid">
      <div>
       
        

            
              <div>
                <a href="@yield('link')" class="btn btn-primary rounded-pill">@yield('link_text')</a>
                    </div>
              @yield('content')

              </div>
  </div>
  </div>
              <script src=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js></script>
              <script src="https://cdn.tiny.cloud/1/jjqcoi1aa4yi5mopawkjpci4avx4z1dh8yyqa8t47lp4mk6u/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
              <script>
                tinymce.init({
                  selector: '#description'
                });
              </script>
              <script>
$(document).ready(function(){
$('#category').multiselect({
nonSelectedText: 'Select category',
enableFiltering: true,
enableCaseInsensitiveFiltering: true,
buttonWidth:'400px'
});
$('#category_form').on('submit', function(event){
event.preventDefault();
var form_data = $(this).serialize();
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$.ajax({
url:"{{ url('store') }}",
method:"POST",
data:form_data,
success:function(data)
{
$('#category option:selected').each(function(){
$(this).prop('selected', false);
});
$('#category').multiselect('refresh');
alert(data['success']);
}
});
});
});
</script>
</body>

</html>