@extends('employer.layout.default')
@section('content')

@include('sweetalert::alert')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('employer.create.step.three.post') }}" method="post">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Step 3: Review Details</div>

                    <div class="card-body">

                        <table class="table">
                            <tr>
                                <td>Product first Name:</td>
                                <td><strong>{{$product->employer_first_name}}</strong></td>
                            </tr>
                            <tr>
                                <td>Product skills:</td>
                                <td><strong>{{$product->employer_last_name}}</strong></td>
                            </tr>
                            
                           
                            
                            
                            <tr>
                                <td>Product Stock:</td>
                                <td><strong>{{$product->employer_phone}}</strong></td>
                            </tr>
                            <tr>
                                <td>Product Stock:</td>
                                <td><strong>{{$product->personl_email}}</strong></td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('employer.create.step.two') }}" class="btn btn-danger pull-right">Previous</a>
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