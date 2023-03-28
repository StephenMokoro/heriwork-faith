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
                <p class="text-secondary">3/5 &nbsp; &nbsp;</p>
                <a href="#" style="text-decoration:none;">
                  <h3 class="card-title  line-height" style="color:#05115d;">Thank you for your interest. We kindly request that you fill out the form below<b></b></h3>
                </a>
                <br>
                <p class="card-text line-">This form will allow us to gather the necessary information to ensure a smooth and successful participation for your organization. </p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-1 border-left">
        <div class="border-bottom d-none d-md-none d-sm-block"></div>
      </div>
      <div class="col-lg-6 pl-0 pr-0 mb-5">
        <form action="{{route('partner.post.step.three')}}" method="POST">
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
                    <label class="text-black" style="font-weight: 600;">Enter your company name<span style="color:red;">*</span></label>
                    <input class="form-control form-control-lg" type="text" placeholder="" value="{{ $product->company_name ?? '' }}"  name="company_name">
                  </div>
                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">Type of business<span style="color:red;">*</span></label>
                  <select  id="" class="form-control form-control-lg" type="text" placeholder="" value="{{ $product->company_type ?? '' }}"  name="company_type">
                    <option value="Accounting/Finance">Accounting/Finance</option>
                    <option value="Advertising/Public Relations">Advertising/Public Relations</option>
                    <option value="Aerospace/Aviation">Aerospace/Aviation</option>
                    <option value="Automotive">Automotive</option>
                    <option value="Banking/Mortgage">Banking/Mortgage</option>
                    <option value="Business Development">Business Development</option>
                    <option value="Business Opportunity">Business Opportunity</option>
                    <option value="Consumer Goods">Consumer Goods</option>
                    <option value="Customer Service">Customer Service</option>
                    <option value="Education/Training">Education/Training</option>
                    <option value="Energy/utilities">Energy/utilities</option>
                    <option value="HealthCare">HealthCare</option>
                    <option value="Legal">Legal</option>
                    <option value="Management/Executive">Management/Executive</option>
                    <option value="Marketting">Marketting</option>
                    <option value="Real Estate">Real Estate</option>
                    <option value="Retail">Retail</option>
                    <option value="Sales">Sales</option>
                    <option value="Technology">Technology</option>
                    <option value="Telecommunication">Telecommunication</option>
                    <option value="Transportation/Logistics">Transportation/Logistics</option>
                    

                  </select>
                  
                  </div>
                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">Designation/ Role<span style="color:red;">*</span></label>
                    <input class="form-control form-control-lg" type="address" placeholder="" value="{{ $product->role ?? '' }}"  name="role">

                  </div>
                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">Company Size (Employees)<span style="color:red;">*</span></label>
                    <select  id="" class="form-control form-control-lg" type="text" placeholder="" value="{{ $product->company_size ?? '' }}"  name="company_size">
                    <option value="0-1">0-1</option>
                    <option value="2-10">2-10</option>
                    <option value="11-50">11-50</option>
                    <option value="51-200">51-200</option>
                    <option value="201-500">201-500</option>
                    <option value="501-1000">501-1000</option>
                    <option value="1001-10000">1001-10000</option>
                    <option value="10000+">10000+</option>

                    </select>

                  </div>
                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">Enter your physical address<span style="color:red;">*</span></label>
                    <input class="form-control form-control-lg" type="address" placeholder="" value="{{ $product->company_address ?? '' }}"  name="company_address">

                  </div>

                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">Brief description of your company<span style="color:red;">*</span></label>
                    <textarea name="brief_desc" class="form-control form-control-lg" id="" value="{{ $product->brief_desc ?? '' }}"  cols="20" rows="5"></textarea>
                  </div>

                  <div class="form-group">
                    <label class="text-black" style="font-weight: 600;">Enter your website link<span style="color:red;">*</span></label>
                    <input class="form-control form-control-lg" type="url" placeholder="" value="{{ $product->web_link ?? '' }}"  name="web_link">
                  </div>

                  <div class="col-lg-12 text-end">
                    <a href=" {{route('partner.create.step.two') }}" class="btn rounded-pill pl-4 pr-4 ml-3 mr-3 border" >Back</a>
                    &nbsp;&nbsp;

                    <button type="submit" class="btn rounded-pill btn-success">  Next:Continue</button>
                  </div>
                </div>
        </form>
      </div>
    </div>
  </div>
</div>
@include('footer-links')
 
@endsection