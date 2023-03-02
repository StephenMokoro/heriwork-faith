@extends('main')
	@section('content')


	<br><br><br>
	<!-- ======= Header ======= -->
	<div class="row justify-content-center">
		<div class="col-lg-8 p-5 mb-2">
			<div class="card mb-4">
			<div class="card-header">Registration</div>
			<div class="card-body">
				<form action="{{ route('sample.validate_registration') }}" method="POST">
					@csrf
					<div class="form-group mb-3">
						<input type="text" name="employer_first_name" class="form-control" placeholder="First name" />
						@if($errors->has('employer_first_name'))
							<span class="text-danger">{{ $errors->first('employer_first_name') }}</span>
						@endif
					</div>
					<br>
                    <div class="form-group mb-3">
						<input type="text" name="employer_last_name" class="form-control" placeholder="Last Name" />
						@if($errors->has('employer_last_name'))
							<span class="text-danger">{{ $errors->first('employer_last_name') }}</span>
						@endif
					</div>
					<br>
					<div class="form-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Enter password" />
						@if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
					</div>
					<br>
					<div class="form-group mb-3">
						<input type="email" name="employer_email" class="form-control" placeholder="Email Address" />
						@if($errors->has('employer_email'))
							<span class="text-danger">{{ $errors->first('employer_email') }}</span>
						@endif
					</div>
					<br>
                    <div class="form-group mb-3">
						<input type="number" name="employer_phone" class="form-control" placeholder="Phone Number" />
						@if($errors->has('employer_phone'))
							<span class="text-danger">{{ $errors->first('employer_phone') }}</span>
						@endif
					</div>
					<br>
					
					
					
					<br>
					
					<div class="d-grid mx-auto">
						<button type="submit" class="btn btn-primary btn-block">Register</button>
						<br><br>
					<a href="{{url('login')}}" style="font-size: x-large;font-weight:bolder;color: rgba(5, 17, 93, 0.9);"  >Already have an account ? Login in here</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	</div>

	@endsection('content')
