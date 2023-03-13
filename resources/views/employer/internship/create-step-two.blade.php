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
                <p class="text-secondary">2/5 &nbsp; &nbsp;Skills</p>
                <a href="#" style="text-decoration:none;">
                  <h3 class="card-title  line-height"style="color:#05115d;"><b>What are the main skills required for your work?</b></h3>
                </a>
                <br>
                <p class="card-text line-">This helps your job post to attract candidates with the right skillset and ultimately results in the best output for your work. </p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-1 border-left">
        <div class="border-bottom d-none d-md-none d-sm-block"></div>
      </div>
      <div class="col-lg-6 pl-0 pr-0 mb-5">
        <form action="{{ route('internship.create.step.two.post') }}" method="POST">
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

                  <p class="text-black" style="font-weight: 600;">Search skills or type your own</p>
                  <!-- <select name="ijob_skills" class="itemName form-control" value="{{{ $product->ijob_skills ?? '' }}}" id="" multiple="multiple"></select> -->

                  <input class="form-control form-control-lg" type="text" placeholder="" value="{{{ $product->ijob_skills ?? '' }}}" name="ijob_skills">

                  <p class="card-text mt-3 text-success" style="font-weight: 500;font-size: 14px;"><span class="fa fa-star"></span> For the best results, add 3-5 skills</p>

                  <div style="display: flex;flex-flow: row wrap; justify-content: left; align-items: left;">
                    <button class="border bg-success text-white rounded-pill skill-tag pl-2 pr-2 pt-0 pb-0 m-1" rel="tag" aria-label="Remove Proofreading">Proofreading </span>&nbsp;<i class="bi bi-x"></i></button>
                    <button class="border bg-success text-white rounded-pill skill-tag pl-2 pr-2 pt-0 pb-0 m-1" rel="tag" aria-label="Remove Writing">Writing </span>&nbsp;<i class="bi bi-x"></i></button>
                  </div>

                  <p class="card-text mt-3 text-black" style="font-weight: 600;">Popular skills for Workstudy jobs</p>

                  <div style="display: flex;flex-flow: row wrap; justify-content: left; align-items: left;">
                    <button class="border bg-light-green text-black rounded-pill skill-tag pl-2 pr-2 pt-0 pb-0 m-1" rel="tag" aria-label="Add Proofreading">Proofreading </span>&nbsp;<i class="bi bi-plus-lg"></i></button>
                    <button class="border bg-light-green text-black rounded-pill skill-tag pl-2 pr-2 pt-0 pb-0 m-1" rel="tag" aria-label="Add Writing">Writing </span><span>&nbsp;<i class="bi bi-plus-lg"></i></button>
                  </div>
                </div>
                <div class="col-lg-12 text-right">
                  <a href="{{ route('internship.create.step.one') }}" class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border">Back</a>

                  <button type="submit" class="btn rounded-pill btn-success">Next: Skill</button>
                </div>
              </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('.itemName').select2({
    placeholder: ' Select a skill',
    ajax: {
      url: '/select2-autocomplete-ajax',
      dataType: 'json',
      delay: 250,
      processResults: function(data) {
        return {
          results: $.map(data, function(item) {
            return {
              text: item.ijob_skills,
              id: item.id
            }
          })
        };
      },
      cache: true
    }
  });
</script>
@endsection