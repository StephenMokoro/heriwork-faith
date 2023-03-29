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
                                <p class="text-secondary">2/5 &nbsp; &nbsp Partner with us as:</p>
                                <a href="#" style="text-decoration:none;">
                                    <h3 class="card-title  line-height" style="color:#05115d;"><b>How would you like to partner with us?</b></h3>
                                </a>
                                <br>
                                <p class="card-text line-">We are interested in exploring potential partnership opportunities with your organization, and we would like to know if you would prefer to partner with us as an individual or as a organization. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 border-left">
                <div class="border-bottom d-none d-md-none d-sm-block"></div>
            </div>
            <div class="col-lg-6 pl-0 pr-0 mb-5">
                <form action="{{route('partner.post.step.two')}}" method="POST">
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

                                    
                                    <div class="form-group" name="partner_type">
                                        <label for="" class="text-black" style="font-weight: 600;">Partner with us as:</label>
                                        <select onchange="window.location.href=this.value;" class="form-control form-control-lg" name="partner_type">
                                            <option value=""></option>
                                            <option value="{{url('partner-account')}}">Individual</option>
                                            <option value="{{url('company-account')}}">Organization</option>
                                        </select>
                                        <input type="hidden" name="partner_type" value="{{ old('partner_type') ?? $partner->partner_type ?? '' }}">


                                    </div>



                                    <div class="col-lg-12 text-end">
                                        <a href="{{ route('partner.create.step.one') }}" class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border">Back</a>
                                        &nbsp;&nbsp;

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


@endsection