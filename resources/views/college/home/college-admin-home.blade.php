<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('header-links')
</head>

<body>
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{url('/')}}" class="logo d-flex align-items-center">
                <span style="color:#ef6603;">Heriwork</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link " href="#" style="color:rgba(5, 17, 93, 0.9);">Partner with us</a></li>
                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle rounded-circle"></i>
                            <span class="d-none d-md-block dropdown-toggle ps-2">Joe doe</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>Joe doe</h6>
                                <span>Web Designer</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html" >
                                    <i class="bi bi-person"></i>
                                    <span style="color:rgba(5, 17, 93, 0.9); font-weight:bolder;">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-gear"></i>
                                    <span style="color:rgba(5, 17, 93, 0.9);font-weight:bolder;">Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                    <i class="bi bi-question-circle"></i>
                                    <span style="color:rgba(5, 17, 93, 0.9);font-weight:bolder;">Need Help?</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{route('employer.logout')}}">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span style="color:rgba(5, 17, 93, 0.9);font-weight:bolder;">Sign Out</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                    <!-- <li><a class="getstarted scrollto border text-black" style="background-color:#fff;color:#05115d; opacity: 0.9" href="{{url('signin')}}">Sign In</a></li>
                    <li><a class="getstarted scrollto" href="{{url('signup')}}">Sign Up</a></li>
                </ul> -->
                    <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <br><br><br>
    <div class="container">
        <section class="section dashboard">
            <div class="row">
                
            <div class="col-12">
                            <div class="card recent-sales overflow-auto border" style="margin-bottom: 30px;border-radius: 5px;box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);">

                               

                                <div class="card-body">
                                    <h5 class="card-title">College Admin   </h5>
                                    <h5 class="card-title"> <b>Joe doe </b>   </h5>

                     
                                            
                                </div>
                                </div>

            </div>
        


                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card" style="margin-bottom: 30px;border-radius: 5px;box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);">
                                <div class="card-body border">
                                    <h5 class="card-title">Total students<span></span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body border" style="margin-bottom: 30px;border-radius: 5px;box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);">
                                    <h5 class="card-title">Pending students <span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person"></i>

                                        </div>
                                        <div class="ps-3">
                                            <h6>64</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">



                                <div class="card-body border" style="margin-bottom: 30px;

  border-radius: 5px;
  box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);">
                                    <h5 class="card-title">Approved students</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>12</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-12">
                            <div class="card recent-sales overflow-auto border" style="margin-bottom: 30px;border-radius: 5px;box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Students </h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col"> Firstname</th>
                                                <th scope="col"> Lastname</th>
                                                <th scope="col"> Email address</th>
                                                <th scope="col"> Phonenumber</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">View more</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#">#2457</a></th>
                                                <td>Brandon </td>
                                                <td>Jacob </td>
                                                <td>jacob.brandon@strathmore.edu </td>
                                                <td>0712345678</td>
                                                <td><span class="badge" style="background-color:#ef6603;">Pending</span></td>
                                                <td style="text-align:center;"><a href="#" style="color:blue;font-size:x-large;font-weight:400;"><i class="bi bi-three-dots"></i></a> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2457</a></th>
                                                <td>Brandon </td>
                                                <td>Jacob </td>
                                                <td>jacob.brandon@strathmore.edu </td>
                                                <td>0712345678</td>
                                                <td><span class="badge" style="background-color: rgba(5, 17, 93, 0.9);">Approved</span></td>
                                                <td style="text-align:center;"><a href="#" style="color:blue;font-size:x-large;font-weight:400;"><i class="bi bi-three-dots"></i></a> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2457</a></th>
                                                <td>Brandon </td>
                                                <td>Jacob </td>
                                                <td>jacob.brandon@strathmore.edu </td>
                                                <td>0712345678</td>
                                                <td><span class="badge " style="background-color:#ef6603;">Pending</span></td>
                                                <td style="text-align:center;"><a href="#" style="color:blue;font-size:x-large;font-weight:400;"><i class="bi bi-three-dots"></i></a> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2457</a></th>
                                                <td>Brandon </td>
                                                <td>Jacob </td>
                                                <td>jacob.brandon@strathmore.edu </td>
                                                <td>0712345678</td>
                                                <td><span class="badge " style="background-color: rgba(5, 17, 93, 0.9);">Approved</span></td>
                                                <td style="text-align:center;"><a href="#" style="color:blue;font-size:x-large;font-weight:400;"><i class="bi bi-three-dots"></i></a> </td>

                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2457</a></th>
                                                <td>Brandon </td>
                                                <td>Jacob </td>
                                                <td>jacob.brandon@strathmore.edu </td>
                                                <td>0712345678</td>
                                                <td><span class="badge" style="background-color:#ef6603;">Pending</span></td>
                                                <td style="text-align:center;"><a href="#" style="color:blue;font-size:x-large;font-weight:400; align-items:center;"><i class="bi bi-three-dots"></i></a> </td>

                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>



























                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body border" style="margin-bottom: 30px;  border-radius: 5px;box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);">
                            <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                            <div class="activity">

                                <div class="activity-item d-flex">
                                    <div class="activite-label">32 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class="activity-content">
                                        2 students registered <a href="#" class="fw-bold text-dark">registered </a> beatae
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">56 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                    <div class="activity-content">
                                        2 students registered <a href="#" class="fw-bold text-dark">registered </a>

                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 hrs</div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class="activity-content">
                                        2 students registered <a href="#" class="fw-bold text-dark">registered </a>

                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">1 day</div>
                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                    <div class="activity-content">
                                        2 students registered <a href="#" class="fw-bold text-dark">registered </a>

                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 days</div>
                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                    <div class="activity-content">
                                        = 2 students registered <a href="#" class="fw-bold text-dark">registered </a>

                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">4 weeks</div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class="activity-content">
                                        2 students registered <a href="#" class="fw-bold text-dark">registered </a>

                                    </div>
                                </div><!-- End activity item-->

                            </div>

                        </div>
                    </div>


                </div><!-- End Right side columns -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto border" style="margin-bottom: 30px;border-radius: 5px;box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-plus fa-2x"></i></a>

                        </div>

                        <div class="card-body pb-0" style="margin-bottom: 30px;border-radius: 5px;box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);">
                            <h5 class="card-title">Add student <span></span></h5>

                            <table class="table table-borderless">
                                <thead>
                                    <th scope="col">#</th>
                                    <th scope="col"> Firstname</th>
                                    <th scope="col"> Lastname</th>
                                    <th scope="col"> Email address</th>
                                    <th scope="col"> Phonenumber</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">View more</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="#">#2457</a></th>
                                        <td>Brandon </td>
                                        <td>Jacob </td>
                                        <td>jacob.brandon@strathmore.edu </td>
                                        <td>0712345678</td>
                                        <td><span class="badge" style="background-color:#ef6603;">Pending</span></td>
                                        <td style="text-align:center;"><a href="#" style="color:blue;font-size:x-large;font-weight:400;"><i class="bi bi-three-dots"></i></a> </td>

                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">#2457</a></th>
                                        <td>Brandon </td>
                                        <td>Jacob </td>
                                        <td>jacob.brandon@strathmore.edu </td>
                                        <td>0712345678</td>
                                        <td><span class="badge" style="background-color: rgba(5, 17, 93, 0.9);">Approved</span></td>
                                        <td style="text-align:center;"><a href="#" style="color:blue;font-size:x-large;font-weight:400;"><i class="bi bi-three-dots"></i></a> </td>

                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">#2457</a></th>
                                        <td>Brandon </td>
                                        <td>Jacob </td>
                                        <td>jacob.brandon@strathmore.edu </td>
                                        <td>0712345678</td>
                                        <td><span class="badge " style="background-color:#ef6603;">Pending</span></td>
                                        <td style="text-align:center;"><a href="#" style="color:blue;font-size:x-large;font-weight:400;"><i class="bi bi-three-dots"></i></a> </td>

                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">#2457</a></th>
                                        <td>Brandon </td>
                                        <td>Jacob </td>
                                        <td>jacob.brandon@strathmore.edu </td>
                                        <td>0712345678</td>
                                        <td><span class="badge " style="background-color: rgba(5, 17, 93, 0.9);">Approved</span></td>
                                        <td style="text-align:center;"><a href="#" style="color:blue;font-size:x-large;font-weight:400;"><i class="bi bi-three-dots"></i></a> </td>

                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">#2457</a></th>
                                        <td>Brandon </td>
                                        <td>Jacob </td>
                                        <td>jacob.brandon@strathmore.edu </td>
                                        <td>0712345678</td>
                                        <td><span class="badge" style="background-color:#ef6603;">Pending</span></td>
                                        <td style="text-align:center;"><a href="#" style="color:blue;font-size:x-large;font-weight:400; align-items:center;"><i class="bi bi-three-dots"></i></a> </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Top Selling -->

            </div>
        </section>
    </div>



    @include('footer-links')
</body>

</html>