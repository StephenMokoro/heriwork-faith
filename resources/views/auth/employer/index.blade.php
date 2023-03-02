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
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="{{url('assets/css/dashboard.css')}}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">

    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
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
    <li><a class="nav-link scrollto active" href="{{url('dashboard')}}">Home</a></li>
    <li><a class="nav-link scrollto" href="#about"> Job</a></li>
    <li><a class="nav-link scrollto" href="#services">Add Student</a></li>
    <li><a class="nav-link scrollto" href=""> </a>  </li>
    <li><a class="getstarted scrollto" style="background-color:#ef6603;" href="{{ route('logouts') }}">Logout</a></li>

    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
    </header><!-- End Header -->
    <!-- CONTENT -->
    <section id="content">


    <!-- MAIN -->
    <main>
    <div class="table-data">
    <div class="order">
    <div class="head">
    <h3>Recently posted jobs</h3>
    <button class="btn " style="background-color:rgba(5, 17, 93, 0.9); color:white;">View All</button>
    </div>
    <hr>

    <table>
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Date Added</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
            <tbody>
                @foreach ($employers as $employer)
                    <tr>
                        <td>{{ $employer->employer_id }}</td>
                        <td>{{ $employer->employer_first_name }}</td>
                        <td>{{ $employer->org_email }}</td>
                        <td>{{ $employer->employer_phone }}</td>
                        <td>
                            <form action="{{ route('employers.destroy',$employer->employer_id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('employers.edit',$employer->employer_id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $employers->links() !!}
    </div>
</body>
</html>