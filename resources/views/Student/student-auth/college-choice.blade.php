@extends('Employer.layout.app')
@section('content')

<div id="wrapper" class="toggle">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-5 h100">
        <div class="card mb-4">
          <div class="card-body pt-4 pl-0 pr-0 pb-5 ml-0 mr-0 mt-4 mb-0">
            <div class="row">
              <div class="col-lg-12 pl-5 pr-5 mb-3">
                <p class="text-secondary">1/4 &nbsp; &nbsp;Welcome</p>
                <a href="#" style="text-decoration:none;">
                  <h3 class="card-title text-black line-height"><b>We've loved helping students find paid work-study opportunities</b></h3>
                </a>
                <p class="card-text">We started Heriwork to help students who are most in need of financial support to raise some income for their upkeep and fees, and to hone important career skills. It is our pleasure to support you.</p>

                <p class="card-text text-success">Polite notice: we collaborates directly with university Financial Aid Departments (<b>FA</b>) to identify the most deserving students to join our paid work-study and internship programs.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-1 border-left">
        <div class="border-bottom d-none d-md-none d-sm-block"></div>
      </div>
      <div class="col-lg-6 pl-0 pr-0 mb-5">
        <form action="{{ route('student.college_choice.post') }}" method="POST">
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
                    <label for="" class="text-black" style="font-weight: 600;">Let's start with your University</label>

                    <br>

                    <select id="" class="itemName form-control" name="school_name"></select>
                    <!-- <input type="text" name="school_name" id="selected_value" hidden> -->

                  </div>

                  <p class="card-text mt-4 text-success" style="font-weight: 500;font-size: 14px;">
                    If your university is not in the list, <a href="{{route('expression')}}">click here to express interest<i class="bi bi-arrow-right"></i></a>
                  </p>
                </div>
                <div class="col-lg-12 text-end">

                  <button type="submit" class="btn rounded-pill btn-success">Next: Country of Origin</button>
                </div>
              </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- The original div with the buttons -->
<!-- <div id="original-div" class="border">
  <span class="btn border bg-light-green text-black rounded-pill skill-tag pl-2 pr-2 pt-0 pb-0 m-1" rel="tag" aria-label="Add Proofreading">Proofreading<span>&nbsp;<i class="bi bi-plus-lg"></i></span></span>
  <span class="btn border bg-light-green text-black rounded-pill skill-tag pl-2 pr-2 pt-0 pb-0 m-1" rel="tag" aria-label="Add Writing">Writing<span>&nbsp;<i class="bi bi-plus-lg"></i></span></span>
</div> -->

<!-- The new div where the buttons will be moved -->
<!-- <div id="new-div" style="border:1px solid red"></div> -->

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">
  // Get the input element and all the spans
  const myInput = document.getElementById('selected');
  const mySpans = document.querySelectorAll('.skill-btn');
  const popularSkills = document.getElementById('popular-skills');
  const selectedSkills = document.getElementById('selected-skills');




  // Add a click event listener to each span
  mySpans.forEach(span => {
    span.addEventListener('click', function(event) {

      var currentInputVal = $('#selected').val();

      // Check if the clicked element has an aria-label containing "Add" (meaning it is in popular skills)
      if (span.getAttribute('aria-label').includes('Add')) {
        // check if the input has any selected skills. 
        if (currentInputVal == "") {
          // if not, then just append the skill selected.
          currentInputVal += span.textContent.trim();
        } else {
          // if it already has a selected skill, then add a comma seperator to the skill you're about to add.
          currentInputVal += "," + span.textContent.trim();
        }

        // add the new skill to the input 
        myInput.value = currentInputVal;

        // change attributes as necessary and append
        span.setAttribute('aria-label', span.getAttribute('aria-label').replace('Add', 'Remove'));
        span.querySelector('i').classList.replace('bi-plus-lg', 'bi-x-lg');
        selectedSkills.appendChild(span);
      } else if (span.getAttribute('aria-label').includes('Remove')) {

        const spanText = span.textContent.trim(); //get text of skill to be removed and trim all spaces

        // get the input value and replace the span text with empty string. If many skills were already selected and you delete the 2nd skill for example, you would end up with a hanging comma. you you replace any 
        const inputValue = myInput.value.trim().replace(spanText, '').replace(/\s*,\s*,/g, ',').replace(/(^,)|(,$)/g, '');

        myInput.value = inputValue;

        span.setAttribute('aria-label', span.getAttribute('aria-label').replace('Remove', 'Add'));
        span.querySelector('i').classList.replace('bi-x-lg', 'bi-plus-lg');
        popularSkills.appendChild(span);

      }
    });
  });
  // let selected_input = $('#selected_value').val();


  $('.itemName').select2({

    placeholder: 'Search for school',
    ajax: {
      url: 'student-details',
      dataType: 'json',
      delay: 250,
      data: function(data) {
        return {
          q: data.term
        }
      },
      processResults: function(data) {
        return {
          results: data
        };
      },
      cache: true
    }
  });

  // $('.itemName').select2({

  //   placeholder: 'Select an item',
  //   ajax: {
  //     url: 'student-details',
  //     dataType: 'json',
  //     delay: 250,
  //     processResults: function(data) {
  //       return {
  //         results: $.map(data, function(item) {
  //           selected_input = item.school_name
  //           return {
  //             text: item.school_name,
  //             id: item.school_auto_id

  //           }
  //         })
  //       };
  //     },
  //     cache: true
  //   }
  // });
</script>
@endsection