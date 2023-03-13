@extends('employer.layout.default')
@section('content')
<div id="wrapper" class="toggle">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-5 h100">
                <div class="card mb-4">
                    <div class="card-body pt-4 pl-0 pr-0 pb-5 ml-0 mr-0 mt-4 mb-0">
                        <div class="row">
                            <div class="col-lg-12 pl-5 pr-5 mb-3">
                                <p class="text-secondary">1/5 &nbsp; &nbsp;Headline</p>
                                <a href="#">
                                    <h3 class="card-title  line-height"style="color:#05115d;"><b>Let's start with a strong headline.</b></h3>
                                </a>
<br>
                                <p class="card-text line-">This helps your job post stand out to the right candidates. It’s the first thing they’ll see, so make it count! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 border-left">
                <div class="border-bottom d-none d-md-none d-sm-block"></div>
            </div>
            <div class="col-lg-6 pl-0 pr-0 mb-5">

                <form action="{{ route('internship.create.step.five.post') }}" method="POST">

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

                                    <p class="text-black" style="font-weight: 600;">Job description</p>
                                    <textarea class="form-control form-control-lg" id="" cols="25" rows="8" name="ijob_desc" value="{{ $product->ijob_desc ?? '' }}"></textarea>
                                    <br>
                                    <p class="text-black" style="font-weight: 600;">Attach file</p>
                                    <input type="file">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-right">
                        <a href="{{ route('internship.create.step.four') }}" class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border">Back</a>

                        <button type="submit" class="btn rounded-pill btn-success">Next: Skill</button>
                    </div>

            </div>





        </div>
    </div>
</div>
@endsection