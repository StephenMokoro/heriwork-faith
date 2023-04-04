<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @include('Employer.layout.content')
</head>

<body>
  @if (session('status'))
  <h6 class="alert alert-success">{{ session('status') }}</h6>
  @endif
  <div class="row my-3">
    <div class="col-lg-8 mx-auto">
      <div class="card shadow">
        <div class="card-header bg-primary">
          <h3 class="text-light fw-bold">Edit Post</h3>
        </div>
        <div class="card-body p-4">

    
          <form action="{{ url('update-student/'.$student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-2">
              <input type="text" name="student_first_name" id="student_first_name" class="form-control" placeholder="Title" value="{{ $student->ijob_title }}" required>
            </div>
            <div class="my-2">
              <input type="text" name="student_last_name" id="student_last_name" class="form-control" placeholder="Category" value="{{ $student->intern_skills }}" required>
            </div>
            <div class="my-2">
              <input type="submit" value="Update Post" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>