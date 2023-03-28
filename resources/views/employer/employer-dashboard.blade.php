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

    a,
    li {
      text-decoration: none;
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
          <li><a class="nav-link scrollto active" href="#">Partner with us</a></li>
          <li><a class="nav-link scrollto active" href="#">Donate</a></li>
          <li><a class="nav-link scrollto active" href="{{url('internship')}}">Post a job</a></li>
          <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-person-circle rounded-circle"></i>
              <span class="d-none d-md-block dropdown-toggle ps-2">Profile</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
</h6>
                <span>Web Designer</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="{{url('profile')}}">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="{{url('profile')}}">
                  <i class="bi bi-gear"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                  <i class="bi bi-question-circle"></i>
                  <span>Need Help?</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="{{route('employer.logout')}}">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>

            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <br><br>

  <br><br>
  <br>

  <div class="container">
    <br><br>
    <div class="row job-row border-top border pe-0 ps-0 rounded-4" style="width:100%; height:25vh">
      <h3 class="text-black">
        <div class="row mt-4">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body p-0 ml-0 mr-0 mb-0">
                <div class="row  pe-5 ps-5">
                  <div class="col-lg-12">
                    <span class="card-title  line-height" style="font-weight: 700; color:#05115d;">Your Dashboard</span>
                  </div>
                  <h3 style=" color:black; font-weight:bolder;"> <br> &nbsp;&nbsp;

                  </h3>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">

            <a href="{{url('internship')}}" class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border hover" style="font-size:14px; background-color:#05115d; color:white;"> Post a job</a>
          </div>
        </div>
      </h3>
      <div class="col-lg-12 col-job-card">
        <div class="card mb-4">
          <div class="card-body p-0 ml-0 mr-0 mt-4 mb-0">
            <div class="row  pe-5 ps-5">
              <div class="col-lg-12 mb-3">
                <a href="#">
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row rounded-4">
      <div class="col-lg-8 ">
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

        <div class="row job-row border-top border pe-0 ps-0 rounded">
          <h3 class="text-black">
            <div class="row mt-4">
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-body p-0 ml-0 mr-0 mb-0">
                    <div class="row  pe-5 ps-5">
                      <div class="col-lg-12">
                        <span class="card-title text-black line-height" style="font-weight: 700;">Your Postings </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4"><a href="#" style="font-size:14px;  color:#ef6603;">See all postings</a></div>
            </div>
          </h3>
          <div class="col-lg-12 col-job-card">
            <div class="card mb-4">

              <div class="card-body p-0 me-0 ms-0 mt-4 mb-0">
                <div class="row  pe-5 ps-5">
                  {{ csrf_field() }}
                </div>
              </div>
            </div>
          </div>
          <div id="post_data"></div>
        </div>
      </div>

      <div class="col-lg-4 ps-5 mt-5">
        <div class="row mt-5">
          <div class="card mb-4 border">
            <div class="card-body p-0 m-0">
              <div class="row  ps-3 pe-3 pt-4">
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



  @include('footer-links')

  <script>
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    window.onclick = function(e) {
      if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementById("myDropdown");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
      }
    }
  </script>

  <script>
    $(document).ready(function() {

      var _token = $('input[name="_token"]').val();

      load_data('', _token);

      function load_data(id = "", _token) {
        $.ajax({
          url: "{{ route('loadmore.load_data') }}",
          method: "POST",
          data: {
            id: id,
            _token: _token
          },
          success: function(data) {
            $('#load_more_button').remove();
            $('#post_data').append(data);
          }
        })
      }

      $(document).on('click', '#load_more_button', function() {
        var id = $(this).data('ijob_auto_id');
        $('#load_more_button').html('<b>Loading...</b>');
        load_data(id, _token);
      });

    });
  </script>


</body>

</html>