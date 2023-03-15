@extends('employer.layout.default')
@section('content')

@include('sweetalert::alert')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('internship.create.step.six.post') }}" method="post">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Step 3: Review Details</div>

                    <div class="card-body">

                        <table class="table">
                            <tr>
                                <td>Product Name:</td>
                                <td><strong>{{$product->ijob_title}}</strong></td>
                            </tr>
                            <tr>
                                <td>Product skills:</td>
                                <td><strong>{{$product->ijob_skills}}</strong></td>
                            </tr>
                            <tr>
                                <td>Product size:</td>
                                <td><strong>{{$product->ijob_size ? 'Medium' : 'Small'}}</strong></td>
                            </tr>
                            <tr>
                                <td>Product task:</td>

                                <td><strong>{{$product->ijob_task ? 'more than a week' : 'less than a week'   }}</strong></td>
                            </tr>
                            <tr>
                                <td>Product Stock:</td>
                                <td><strong>{{$product->ijob_task ? '1-3 months' : 'More than 3 months'   }}</strong></td>

                            </tr>
                            <tr>
                                <td>Product size:</td>
                                <td><strong>{{$product->ijob_budget_currency ? 'USD' : 'KSH'}}</strong></td>
                            </tr>
                            <tr>
                                <td>Product Stock:</td>
                                <td><strong>{{$product->ijob_task_run}}</strong></td>
                            </tr>
                            <tr>
                                <td>Internship:</td>
                                <td><strong>{{$product->inter_skills}}</strong></td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('internship.create.step.two') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection