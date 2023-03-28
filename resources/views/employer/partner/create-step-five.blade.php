@extends('Employer.layout.app')
@section('content')
@if (session('success'))
    <script>
        swal("Partner successfully!", "{{ session('success') }}", "success");
    </script>
@endif
<div id="wrapper" class="toggle">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-5 h100">
                <div class="card mb-4">
                    <div class="card-body pt-4 pl-0 pr-0 pb-5 ml-0 mr-0 mt-4 mb-0">
                        <div class="row">
                            <div class="col-lg-12 pl-5 pr-5 mb-3">
                                <p class="text-secondary">5/5 &nbsp; &nbsp; Hear about us</p>
                                <a href="#">
                                    <h3 class="card-title  line-height" style="color:#05115d;"><b><b>Referral</b></b></h3>
                                </a>
                                <br>

                                <p class="card-text line-">Please let us know how you heard about us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 border-left">
                <div class="border-bottom d-none d-md-none d-sm-block"></div>
            </div>
            <div class="col-lg-6 pl-0 pr-0 mb-5">

                <form action="{{ route('partner.post.step.five') }}" method="POST">
                    @csrf

                    <div class="card mb-4">
                        <div class="card-body pt-4 pl-0 pr-0 pb-5 ml-0 mr-0 mt-4 mb-0">
                            <div class="row">
                                <div class="col-lg-12 pl-5 pr-5 mb-3">

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif



                                    <div class="form-group">
                                        <label class="text-black" style="font-weight: 600;">How did you find out about us<span style="color:red;">*</span></label>

                                        <select class="form-control form-control-lg" name="hear_us">
                                            <option value=""></option>
                                            <option value="newsletter">Newsletter</option>
                                            <option value="social media">Social Media</option>
                                            <option value="Google search">Google Search</option>
                                            <option value="Referral">Referral</option>
                                        </select>

                                    </div>

                                </div>





                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-12 text-end" style=" bottom:0">
                <a href="{{ route('internship.create.step.three') }}" class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border">Back</a>
                &nbsp;&nbsp;

                <button type="submit" class="btn rounded-pill btn-success">Next:Submit</button>

            </div>
        </div>


    </div>
</div>
</div>

@endsection