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
                                    <h3 class="card-title  line-height" style="color:#05115d;"><b>Let's start with a strong headline.</b></h3>
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

                <form action="{{ route('internship.create.step.four.post') }}" method="POST">
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


                                    <p class="text-black" style="font-weight: 600;">Specify your budget currency</p>

                                    <div class="form-check form-group">
                                        <input class="form-check-input" type="radio" name="ijob_budget_currency" id="flexRadioDefault1" value="1" {{{ (isset($product->ijob_budget_currency) && $product->ijob_budget_currency == '1') ? "checked" : "" }}}>
                                        <label class="form-check-label" for="ijob_budget_currency" style="font-weight: 500;">
                                            USD
                                        </label>
                                    </div>

                                    <div class="form-check mt-3 form-group">
                                        <input class="form-check-input" type="radio" name="ijob_budget_currency" id="flexRadioDefault1" value="0" {{{ (isset($product->ijob_budget_currency) && $product->ijob_budget_currency == '0') ? "checked" : "" }}}>
                                        <label class="form-check-label" for="flexRadioDefault1" style="font-weight: 500;">
                                            Kshs
                                        </label>
                                    </div>

                                    <p class="text-black mt-4" style="font-weight: 600;">Wholesome project budget
                                        <br><small class="text-secondary">Because our students will work between the school calendar, we're unable to provide for hourly rate. We appreciate your understanding.</small>
                                    </p>

                                    <input class="form-control form-control-lg" type="text" placeholder="" name="ijob_budget_amount" {{{ $product->ijob_budget_amount ?? '' }}}>

                                    <p class="card-text mt-3 text-success" style="font-weight: 500;font-size: 14px;"><span class="fa fa-heart text-danger"></span> Thank you for being considerate in your budget proposal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-right" style=" bottom:0">
                        <a href="{{ route('internship.create.step.three') }}" class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border">Back</a>
                        <button type="submit" class="btn rounded-pill btn-success">Next:Description</button>

                    </div>
            </div>


        </div>
    </div>
</div>

@endsection