@extends('Employer.layout.app')

@section('content')
@include('header-links')
<style>
    .select2-container--default .select2-search--dropdown .select2-search__field::before {
        content: "\f002";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 14px;
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
    }
</style>
<div id="wrapper" class="toggle">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-5 h100">
                <div class="card mb-4">
                    <div class="card-body pt-4 pl-0 pr-0 pb-5 ml-0 mr-0 mt-4 mb-0">
                        <div class="row">
                            <div class="col-lg-12 pl-5 pr-5 mb-3">
                                <p class="text-secondary">2/5 &nbsp; &nbsp;Job category</p>
                                <a href="#" style="text-decoration:none;">
                                    <h3 class="card-title  line-height" style="color:#05115d;"><b>What is the job category of the job you want to post?</b></h3>
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

                                    <div class="col-12">
                                        <label for="" style="font-weight: 600;">Select Job category</label>
                                        <br>
                                        <select id="" class="jobCategory form-control select2-search" name="ijob_category"></select>
                                        <!-- <input type="text" name="school_name" id="selected_value" hidden> -->

                                    </div>
                                    <br><br>

                                    <div class="col-lg-12 text-end">
                                        <a href="{{ route('internship.create.step.one') }}" class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border">Back</a>
                                        &nbsp;&nbsp;

                                        <button type="submit" class="btn rounded-pill btn-success">Next: Skills</button>
                                    </div>
                                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('footer-links')
<script type="text/javascript">

</script>
<script>
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script>
    $('.jobCategory').select2({
        placeholder: 'Select JobCategory',
        templateResult: function(result, container) {
            if (!result.id) {
                return result.text;
            }
            var icon = '<i class="fa fa-search"></i>';
            var $result = $(
                '<span class="select2-search__field">' + icon + '</span><span>' + result.text + '</span>'
            );
            return $result;
        },
        ajax: {
            url: 'jobcategorylist',
            dataType: 'json',
            delay: 250,
            data: function(data) {
                return {
                    q: data.term,
                };
            },
            processResults: function(data) {
                return {
                    results: data,
                };
            },
            cache: true,
        },
    });
</script>
@endsection