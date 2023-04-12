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
                <p class="text-secondary">3/4 &nbsp; &nbsp;Personal details</p>
                <a href="#" style="text-decoration:none;">
                  <h3 class="card-title text-black line-height"><b>Tell us about yourself</b></h3>
                </a>
                <p class="card-text">We'd love to know a little about yourself. We will use this information to serve you.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-1 border-left">
        <div class="border-bottom d-none d-md-none d-sm-block"></div>
      </div>
      <div class="col-lg-6 pl-0 pr-0 mb-5">
        <form action="{{ route('student.personal_details.post') }}" method="POST">
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
                    <label for="" class="text-black" style="font-weight: 600;">What is your first name? <span>*</span> </label>
                    <input type="text" class="form-control" placeholder="" name="student_first_name" value="{{ $student->student_first_name ?? '' }}">
                  </div>

                  <div class="form-group">
                    <label for="" class="text-black" style="font-weight: 600;">What is your last name? <span>*</span></label>
                    <input type="text" class="form-control" placeholder="" name="student_last_name" value="{{ $student->student_last_name ?? '' }}">
                  </div>



                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">Enter your phone number<span style="color:red;">*</span></label>
                    <br>
                    <input id="telephone-input" type="tel " class="form-control form-control-lg" style="width:100%!important; " value="{{ $partner->student_phone ?? '' }}" placeholder="712219585" name="student_phone" pattern="[1-9][0-9]{8}">

                  </div>

                  <label for="" class="text-black" style="font-weight: 600;">What gender do you identify with? <span>*</span></label>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="student_gender" id="maleRadio" value="Male" {{ (isset($student) && $student->student_gender == 'Male') ? 'checked' : '' }}>
                    <label class="form-check-label" for="maleRadio">
                      Male
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="student_gender" id="femaleRadio" value="Female" {{ (isset($student) && $student->student_gender == 'Female') ? 'checked' : '' }}>
                    <label class="form-check-label" for="femaleRadio">
                      Female
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="student_gender" id="otherRadio" value="Others" {{ (isset($student) && $student->student_gender == 'Others') ? 'checked' : '' }}>
                    <label class="form-check-label" for="otherRadio">
                      Other
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="student_gender" id="notSayRadio" value="prefer not to say" {{ (isset($student) && $student->student_gender == 'prefer not to say') ? 'checked' : '' }}>
                    <label class="form-check-label" for="notSayRadio">
                      Prefer not to say
                    </label>
                  </div>


                </div>
                <div class="col-lg-12 text-end">
                  <a href="{{ url('student-country') }}" class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border">Back</a>
                  <button type="submit" class="btn rounded-pill btn-success">Next: Secure Your Account</button>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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