@extends('Employer.layout.app')

@section('content')
@include('header-links')
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
                  <h3 class="card-title  line-height" style="color:#05115d;"><b>What are the main skills required for your work?</b></h3>
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
          <input type="text" name="intern_skills" id="intern_skills" hidden />
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
                    <label class="text-black" style="font-weight: 600;">Search skills or type your own</label>
                    <!-- <select name="ijob_skills" class="itemName form-control" value="{{{ $product->ijob_skills ?? '' }}}" id="" multiple="multiple"></select> -->
                    <br>
                    <select id="" class="countryName form-control" name="country"></select>

                    <!-- <input class="form-control form-control-lg" type="text" placeholder="" value="{{{ $product->ijob_skills ?? '' }}}" name="ijob_skills"> -->
                  </div>
                  <div class="form-group">
                    <label class="card-text mt-3 mb-2 text-success" style="font-weight: 500;font-size: 14px;"><span class="fa fa-star"></span> For the best results, add 3-5 skills</label>
                    <div id="selected-skills" style="display: flex;flex-flow: row wrap; justify-content: left; align-items: left;"></div>

                    <p class="card-text mt-3 text-black" style="font-weight: 600;">Popular skills for Workstudy jobs</p>

                    <div class="form-group">

                      <input id="selected" class="form-control form-control-lg" type="text" name="intern_skills" hidden>
                    </div>
                    <div id="popular-skills" style="display: flex;flex-flow: row wrap; justify-content: left; align-items: left;">
                      @foreach ($student as $item)
                      <span class="skill-btn btn border bg-light-green text-black rounded-pill skill-tag pl-2 pr-2 pt-0 pb-0 m-1" rel="tag" aria-label="Add '{{$item->ijob_skills}}'">{{$item->ijob_skills}}<span>&nbsp;<i id="icon_clicked" class="bi bi-plus-lg"></i></span></span>
                      @endforeach
                    </div>
                  </div>
                  <!-- <div class="form-group">
                      <label class="card-text mt-3 text-success" style="font-weight: 500;font-size: 14px;"><span class="fa fa-star"></span> For the best results, add 3-5 skills</label>
                      <div id="selected" style="display: flex;flex-flow: row wrap; justify-content: left; align-items: left;"></div>
                      </label>
                      <p class="card-text mt-3 text-black" style="font-weight: 600;">Popular skills for Workstudy jobs</p>
                      <div name="test">

                        <div id="popular-skills" style="display: flex;flex-flow: row wrap; justify-content: left; align-items: left;">
                          @foreach ($student as $item)
                          <span class="skill-btn btn border bg-light-green text-black rounded-pill skill-tag pl-2 pr-2 pt-0 pb-0 m-1" rel="tag" aria-label="Add '{{$item->ijob_skills}}'">{{$item->ijob_skills}}<span>&nbsp;<i id="icon_clicked" class="bi bi-plus-lg"></i></span></span>
                          @endforeach
                        </div>
                      </div> -->
                  <!-- <div style="display: flex;flex-flow: row wrap; justify-content: left; align-items: left;">
                    <button class="border bg-light-green text-black rounded-pill skill-tag pl-2 pr-2 pt-0 pb-0 m-1" rel="tag" aria-label="Add Proofreading">Proofreading </span>&nbsp;<i class="bi bi-plus-lg"></i></button>
                    <button class="border bg-light-green text-black rounded-pill skill-tag pl-2 pr-2 pt-0 pb-0 m-1" rel="tag" aria-label="Add Writing">Writing </span><span>&nbsp;<i class="bi bi-plus-lg"></i></button>
                  </div> -->
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
@include('footer-links')
<script type="text/javascript">
  // $('.itemName').select2({
  //   placeholder: ' Select a skill',
  //   ajax: {
  //     url: '/select2-autocomplete-ajax',
  //     dataType: 'json',
  //     delay: 250,
  //     processResults: function(data) {
  //       return {
  //         results: $.map(data, function(item) {
  //           return {
  //             text: item.ijob_skills,
  //             id: item.id
  //           }
  //         })
  //       };
  //     },
  //     cache: true
  //   }
  // });
</script>
<script>
  // let main_div = document.getElementById("root");
  // let chosen_skills = document.getElementById("chosen-skills");
  // let skills_list = document.getElementById("skills-list");
  // let input_skills = document.getElementById("intern_skills");
  // let skills_set = new Set([]);
  // let skills_arr = [];
  // console.log(input_skills.value);

  // main_div.childNodes.forEach(
  //   skill => {
  //     skill.addEventListener("click", function(e) {
  //       if (e.target.parentNode.id == "skills-list") {
  //         console.log(e.target);
  //         chosen_skills.appendChild(e.target);
  //         skills_set.add(e.target.innerHTML);
  //         console.log("Pushed:", skills_set);
  //       } else if (e.target.parentNode.id == "chosen-skills") {

  //         console.log(e.target);
  //         chosen_skills.removeChild(e.target);
  //         skills_list.appendChild(e.target);
  //         skills_set.delete(e.target.innerHTML);

  //         //console.log(skills_list);
  //       }
  //       input_skills.value = JSON.stringify([...skills_set]);
  //     })
  //   });

  // Get the original and new divs
  // const popularSkills = document.getElementById('popular-skills');
  // const selectedSkills = document.getElementById('selected-skills');
  // const icon_clicked = document.getElementById('icon_clicked');






  // Add a click event listener to the original div
  // popularSkills.addEventListener('click', function(event) {
  //   const button = event.target;

  //   // Check if the clicked element is a button with an aria-label containing "Add"
  //   if (button.classList.contains('btn') && button.getAttribute('aria-label').includes('Add')) {
  //     button.setAttribute('aria-label', button.getAttribute('aria-label').replace('Add', 'Remove'));
  //     button.querySelector('i').classList.replace('bi-plus-lg', 'bi-x-lg');
  //     selectedSkills.appendChild(button);
  //   }



  //  else if (button.classList.contains('bi-plus-lg')) {
  //   button.setAttribute('aria-label', button.getAttribute('aria-label').replace('Add', 'Remove'));
  //   button.querySelector('i').classList.replace('bi-plus-lg', 'bi-x-lg');
  //   selectedSkills.appendChild(button);
  // }

  // Get the original and new divs
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
</script>
<script>
  $('.skillName').select2({

    placeholder: 'Select a skill',
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
</script>
@endsection