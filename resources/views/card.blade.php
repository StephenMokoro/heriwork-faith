<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <div class="container-fluid">
            <form class="form-horizontal" action="/post/" method="POST">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title line-height-36">Create Job</h4>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Job Details</div>
                            </div>
                            <div class="card-body">
                                <div class="row form-group">
                                    <div class="col-12">
                                        <label for="title">
                                            Title
                                            <span class="text-red font-weight-bold">*</span></label>
                                        <input id="title" type="text" name="title" placeholder="Title" class="form-control " value="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="company_id">
                                            Company
                                            <span class="text-red font-weight-bold">*</span></label>
                                        <select name="company_id" class="form-control select2bs4 select2-hidden-accessible" id="company_id" data-select2-id="company_id" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="2"> Company</option>
                                            <option value="1"> qtn global services private limited</option>
                                            <option value="2"> Digital Point</option>
                                            <option value="3"> Quantum Comp Solutions</option>
                                            <option value="4"> TriTech International</option>
                                            <option value="5"> Nerdware</option>
                                            <option value="6"> Fiscal Analytics</option>
                                            <option value="7"> Radiance Software</option>
                                            <option value="8"> IntelliWare</option>
                                            <option value="9"> AddTek Software Co.</option>
                                            <option value="10"> Java Points</option>
                                            <option value="11"> Softtech Point</option>
                                            <option value="12"> Domrin</option>
                                            <option value="13"> Tech Giant</option>
                                            <option value="14"> Sales Point</option>
                                            <option value="15"> dsfsd</option>
                                            <option value="16"> ABC</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="1" style="width: 567.203px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-company_id-container"><span class="select2-selection__rendered" id="select2-company_id-container" role="textbox" aria-readonly="true" title=" Company"> Company</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="category_id">
                                            Category
                                            <span class="text-red font-weight-bold">*</span></label>
                                        <select name="category_id" class="form-control select2bs4 select2-hidden-accessible" id="category_id" data-select2-id="category_id" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="4"> Category</option>
                                            <option value="1"> Engineer/Architects</option>
                                            <option value="2"> Garments/Textile</option>
                                            <option value="3"> Design/Creative</option>
                                            <option value="4"> Hospitality/ Travel/ Tourism</option>
                                            <option value="5"> IT &amp; Telecommunication</option>
                                            <option value="6"> Medical/Pharma</option>
                                            <option value="7"> Driving/Motor Technician</option>
                                            <option value="8"> Law/Legal</option>
                                            <option value="9"> Others</option>
                                            <option value="10"> nkkn</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="3" style="width: 567.203px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-category_id-container"><span class="select2-selection__rendered" id="select2-category_id-container" role="textbox" aria-readonly="true" title=" Category"> Category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-12 col-md-6">
                                        <label class="class" for="vacancies">
                                            Vacancies
                                            <span class="form-label-required text-danger">*</span>
                                        </label>
                                        <input id="vacancies" type="text" name="vacancies" placeholder="Vacancies" class="form-control " value="">
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="deadline">
                                            Deadline
                                        </label>
                                        <input id="deadline" type="text" name="deadline" placeholder="MM/DD/YYYY" class="form-control " value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Salary Details</div>
                            </div>
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-md-4 form-check">
                                        <div class="icheck-success d-inline">
                                            <input checked="" onclick="salaryModeChange('range')" value="range" name="salary_mode" type="radio" class="form-check-input" id="salary_rangee">
                                            <label class="form-check-label mr-5" for="salary_rangee">Salary Range</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-check">
                                        <input onclick="salaryModeChange('custom')" value="custom" name="salary_mode" type="radio" class="form-check-input" id="custom_salary">
                                        <label class="form-check-label mr-5" for="custom_salary">Custom Salary</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group salary_range_part">
                                        <label for="min_salary">
                                            Minimum Salary
                                        </label>
                                        <input id="min_salary" type="number" name="min_salary" placeholder="Minimum Salary" class="form-control " value="">
                                    </div>
                                    <div class="col-sm-6 form-group salary_range_part">
                                        <label for="max_salary">
                                            Maximum Salary
                                        </label>
                                        <input id="max_salary" type="number" name="max_salary" placeholder="Maximum Salary" class="form-control " value="">
                                    </div>
                                    <div class="col-sm-6 form-group d-none" id="custom_salary_part">
                                        <label for="custom_salary">
                                            Custom Salary
                                        </label>
                                        <input id="custom_salary" type="text" name="custom_salary" class="form-control " value="Competitive">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label for="salary_type">
                                            Salary Type
                                            <span class="text-red font-weight-bold">*</span>
                                        </label>
                                        <select name="salary_type" class="form-control select2bs4 select2-hidden-accessible" id="salary_type" data-select2-id="salary_type" tabindex="-1" aria-hidden="true">
                                            <option value="1" data-select2-id="6"> Monthly</option>
                                            <option value="2"> Project Basis</option>
                                            <option value="3"> Hourly</option>
                                            <option value="4"> Yearly</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="5" style="width: 276.094px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-salary_type-container"><span class="select2-selection__rendered" id="select2-salary_type-container" role="textbox" aria-readonly="true" title=" Monthly"> Monthly</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Description</div>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-2">
            <input type="submit" value="Update Post" class="btn btn-primary">
          </div>
            </form>
        </div>

    </div>
</body>

</html>