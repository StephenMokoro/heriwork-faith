@extends('Employer.layout.app')

@section('content')

@include('sweetalert::alert')
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

<div class="container col-lg-12  ">
    <br>
    <div class="row">

        <div class="col-lg-12">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <form action="{{ route('internship.create.step.six.post') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row job-row border-top border pl-0 pr-0 rounded">

                            <h3 class="text-black">
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body p-0 ml-0 mr-0 mb-0">
                                                <div class="row  pl-5 pr-5">
                                                    <div class="col-lg-12">
                                                        <span class="card-title text-black line-height" style="font-weight: 700;"> Job title </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h3>
                            <div class="col-lg-12 col-job-card">
                                <div class="card mb-4">
                                    <div class="card-body p-0 ml-0 mr-0 mt-4 mb-0">
                                        <div class="row  pe-5 ps-5">
                                            <div class="col-lg-12 mb-3">
                                                <a href="#">
                                                    <h5 class="card-title text-black line-height" style="font-weight: 600;">{{$product->ijob_title}} </h5>
                                                </a>
                                            </div>

                                            <!-- <div class="col-lg-4">
                                                <h6 class="text-secondary">Fixed-Price</h6>
                                                <h6 class="text-secondary">Created 4 minutes ago</h6>
                                            </div> -->

                                            <!-- <div class="col-lg-8">
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
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-job-card">
                                <div class="card mb-4">
                                    <div class="card-body p-0 ml-0 mr-0 mt-4 mb-0">
                                        <div class="row  pe-5 ps-5">
                                            <div class="col-lg-12 mb-3">
                                                <a href="#">
                                                    <h5 class="card-title text-black line-height" style="font-weight: 600;">Skills Required </h5>
                                                </a>
                                            </div>

                                            <div class="col-lg-4">
                                                <h6 class="text-secondary">{{$product->ijob_skills}}</h6>

                                            </div>

                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <h6 class="text-secondary">{{$product->ijob_skills}}</h6>

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
                                        <div class="row  pe-5 ps-5">
                                            <div class="col-lg-12 mb-3">
                                                <a href="#">
                                                    <h5 class="card-title text-black line-height" style="font-weight: 600;">What is the size of your work </h5>
                                                </a>
                                            </div>

                                            <div class="col-lg-4">
                                                <h6 class="text-secondary">{{$product->ijob_size ? 'Medium' : 'Small'}}</h6>

                                            </div>

                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <h6 class="text-secondary"> Task duration: {{$product->ijob_task ? '1-3 months' : 'More than 3 months'   }}</h6>

                                                    </div>
                                                    <div class="col-lg-4 text-center">
                                                        <h6 class="text-secondary"> Task takes:{{$product->ijob_task ? 'more than a week' : 'less than a week'   }} </h6>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="{{ route('internship.create.step.five') }}" class="btn btn-danger pull-right">Previous</a>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>








    </div>

</div>

</div>
@endsection