<!DOCTYPE html>
<html>

<head>
    @include('header-links')
</head>

<body>
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
    <section id="hero" class="hero d-flex align-items-center">
        <br><br>
        <div class="container ">
            <div class="row ">
                <div class="col-md-8 offset-md-2 ">
                    <div class="card border">
                        <div class="card-header">
                            <h6>Expression table</h6>
                            <h5> <b> Please provide your details</b></h5>
                        </div>
                        <div class="card-body">
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

                            <div class="col-lg-12">

                                <form class="row g-3" method="post" enctype="multipart/form-data" action="{{route('expression-page')}}">
                                    @csrf
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="school_name" placeholder="School name" name="school_name">
                                        <span class="text-danger"> @error('school_name'){{$message}} @enderror</span>

                                    </div>
                                    <br>

                                    <br>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="student_first_name" name=" student_first_name" placeholder="Enter first name">
                                        <span class="text-danger"> @error('student_first_name'){{$message}} @enderror</span>

                                    </div>
                                    <br>

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="student_last_name" name="student_last_name" placeholder="Enter last name">
                                        <span class="text-danger"> @error('student_last_name'){{$message}} @enderror</span>

                                    </div>
                                    <br>

                                    <div class="col-12">
                                        <input type="email" class="form-control" id="student_email" placeholder="Enter student email" name="student_email">
                                        <span class="text-danger"> @error('student_email'){{$message}} @enderror</span>

                                    </div>
                                    <br>

                                    <div class="col-12">
                                        <input type="tel" class="form-control" id="student_phone" placeholder="Enter student phone" name="student_phone">
                                        <span class="text-danger"> @error('student_phone'){{$message}} @enderror</span>

                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <label for="" style="font-weight: 600;">Select your country of origin</label>
                                        <br>
                                        <select id="" class="countryName form-control" name="country"></select>
                                        <!-- <input type="text" name="school_name" id="selected_value" hidden> -->

                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script>
        $('.countryName').select2({

            placeholder: 'Select origin country',
            ajax: {
                url: 'country_list',
                dataType: 'json',
                delay: 250,
                data: function(data) {
                    return {
                        q: data.term
                    }
                },
                processResults: function(data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    </script>
</body>

</html>