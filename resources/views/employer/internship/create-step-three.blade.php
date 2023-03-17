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
                                <p class="text-secondary">3/5 &nbsp; &nbsp;Scope</p>
                                <a href="#">
                                    <h3 class="card-title text-black line-height" style="color:blue;"><b>Estimate the scope of your work</b></h3>
                                </a>


                                <p class="card-text line-">Define the size of your project and the time it will take. Because our students are mostly on session and work between school work, we request our impact employers to be considerate and allow for sufficient time for task completion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 border-left">
                <div class="border-bottom d-none d-md-none d-sm-block"></div>
            </div>
            <div class="col-lg-6 pl-0 pr-0 mb-5">
                <form action="{{ route('internship.create.step.three.post') }}" method="POST">
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

                                    <p class="card-text mt-3 text-success" style="font-weight: 500;font-size: 14px;"><span class="fa fa-heart text-danger"></span> Thank you in advance for being considerate in your scope and timeline.</p>
                                    <p class="text-black" style="font-weight: 600;">What is the size of your work?
                                    </p>
                                    <div class="form-check form-group">
                                        <label class="radio-inline"><input type="radio" name="ijob_size" value="1" {{{ (isset($product->ijob_size) && $product->ijob_size == '1') ? "checked" : "" }}}> Medium
                                            <br><small class="text-secondary">Well-defined tasks (e.g. data labeling or writing an ebook)</small>
                                        </label>

                                    </div>

                                    <div class="form-check mt-3 form-group">

                                        <label class="radio-inline"><input type="radio" name="ijob_size" value="0" {{{ (isset($product->ijob_size) && $product->ijob_size == '0') ? "checked" : "" }}}> Small
                                            <br><small class="text-secondary">Quick and straight-forward tasks (e.g. write a blog post)</small>

                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 pl-5 pr-5 mb-3 mt-4 form-group">
                                    <p class="text-black" style="font-weight: 600;">How long will this task take to complete?
                                        <br><small class="text-secondary">The period of time this task should take a student to complete and submit</small>
                                    </p>

                                    <div class="form-check form-group">
                                        <label style="font-weight: 500;" class="radio-inline"><input type="radio" name="ijob_task" value="0" {{{ (isset($product->ijob_task) && $product->ijob_task == '0') ? "checked" : "" }}}>
                                            More than 1 month.
                                        </label>


                                    </div>

                                    <div class="form-check mt-3 form-group">
                                        <label style="font-weight: 500;" class="radio-inline"><input type="radio" name="ijob_task" value="4" {{{ (isset($product->ijob_task) && $product->ijob_task == '4') ? "checked" : "" }}}>
                                            Less than a week
                                        </label>

                                    </div>
                                </div>

                                <div class="col-lg-12 pl-5 pr-5 mb-3">
                                    <p class="text-black" style="font-weight: 600;">How long will this task run (moreso if routine)?
                                        <small class="text-secondary"><br>The period of time this same task will be available for engagement</small>
                                    </p>

                                    <div class="form-check">

                                        <label class="radio-inline" style="font-weight: 500;"><input type="radio" name="ijob_task_run" value="0" {{{ (isset($product->ijob_task_run) && $product->ijob_task_run == '0') ? "checked" : "" }}}> More than 3 months.
                                            <br><small class="text-secondary">Tasks such as blog writing may be available over a longer period of time.</small>

                                        </label>

                                    </div>

                                    <div class="form-check mt-3 form-group">
                                        <label class="radio-inline" style="font-weight: 500;"><input type="radio" name="ijob_task_run" value="1" {{{ (isset($product->ijob_task_run) && $product->ijob_task_run == '1') ? "checked" : "" }}}> 1-3 months.

                                        </label>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-12 text-right" style=" bottom:0">
                                <a href="{{ route('internship.create.step.two') }}" class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border">Back</a>
                                <button type="submit" class="btn rounded-pill btn-success">Next: Budget</button>

                            </div>

                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
@endsection