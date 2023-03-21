@extends('Employer.layout.app')

@section('content')

@include('sweetalert::alert')

<div class="container col-lg-12  ">
    <div class="  border  rounded-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('internship.create.step.six.post') }}" method="post">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-header" style="font-size:x-large; font-weight:900;"> Job Details</div>

                        <div class="card-body">

                            <table class="table pb-5 pt-5">
                                <tr>
                                    <td>Intenship job Name:</td>
                                    <td><strong>{{$product->ijob_title}}</strong>
                                        <h6 class="text-end"><a href="{{route('internship.create.step.one')}}"><i class="bi bi-pencil-square"></i></a></h6>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Intenship job description:</td>
                                    <td><strong>{{$product->ijob_desc}}</strong>
                                    <h6 class="text-end"><a href="{{route('internship.create.step.five')}}"><i class="bi bi-pencil-square"></i></a></h6>

                                </td>
                                </tr>
                                <tr>
                                    <td>Intenship skills:</td>
                                    <td><strong>{{$product->ijob_skills}}</strong>
                                        <h6 class="text-end"><a href="{{route('internship.create.step.two')}}"><i class="bi bi-pencil-square"></i></a></h6>

                                    </td>

                                </tr>
                                <tr>
                                    <td>Other skills:</td>
                                    <td><strong>{{$product->inter_skills}}</strong>
                                        <h6 class="text-end"><a href="{{route('internship.create.step.three')}}"><i class="bi bi-pencil-square"></i></a></h6>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Job size:</td>
                                    <td><strong>{{$product->ijob_size ? 'Medium' : 'Small'}}</strong>
                                        <h6 class="text-end"><a href="{{route('internship.create.step.three')}}"><i class="bi bi-pencil-square"></i></a></h6>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Internship task:</td>

                                    <td><strong>{{$product->ijob_task ? 'more than a week' : 'less than a week'   }}</strong>
                                        <h6 class="text-end"><a href="{{route('internship.create.step.three')}}">
                                                <<i class="bi bi-pencil-square"></i>
                                            </a></h6>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Tak duration:</td>
                                    <td><strong>{{$product->ijob_task ? '1-3 months' : 'More than 3 months'   }}</strong>
                                        <h6 class="text-end"><a href="{{route('internship.create.step.three')}}"><i class="bi bi-pencil-square"></i></a></h6>

                                    </td>

                                </tr>
                               
                                <tr>
                                    <td>Job task run:</td>
                                    <td><strong>{{$product->ijob_task_run}}</strong>
                                        <h6 class="text-end"><a href="internship.create.step.four"><i class="bi bi-pencil-square"></i></a></h6>

                                    </td>
                                </tr>

                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <a href="{{ route('internship.create.step.two') }}" class="btn btn-danger pull-right">Previous</a>
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
@endsection