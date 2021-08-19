@extends('layouts/index')
@section('title', 'PRICING PLAN')
@section('contents')
<!--  top bar -->
<!--  end top bar -->
<!--  navigation -->
 @include('partial/header')
<!--  end navigation -->

<!--  page banner -->
  <div id="page-banner" class="page-banner-main" style="background-image: url('{{ asset('assets/images/homebanner.jpg') }}')">
  <div class="overlay-bg"></div>    
    <div class="page-banner-text text-center">
      <h3 class="page-baner-hedding">Pricing Plan</h3>  
      <ol class="breadcrumb">
        <li><a href="{{ route('index') }}">Home</a></li>
        <li class="active">Pricing Plan</li>
      </ol>     
    </div> 
  </div>
<!--  end page banner -->
<!--  pricing paln -->
  <div id="pricing-plan" class="pricing-plan-main-block">
    <div class="container">
      <div class="section text-center">
        <div class="section-style"></div>
        <h2 class="section-heading">Choose best pricing plan</h2>
        <p class="sub-heading">Popular Cities in your country</p>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="pricing-plan-block text-center">
            <div class="pricing-top">
              <h5 class="pricing-heading">Silver</h5>
              <div class="pricing-amount"><sup>$ </sup>200<span> mo</div>
            </div>
            <div class="pricing-dtl">
              <ul>
                <li>2 Beds</li>
                <li>2 Bathroom</li>
                <li>1 Hall</li>
                <li>1 Kitchen</li>
                <li>Non Ac</li>
                <li>Parking</li>
              </ul>
              <a href="#" class="btn btn-default btn-pricing">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="pricing-plan-block pricing-plan-special text-center">
            <div class="pricing-top">
              <h5 class="pricing-heading">Gold</h5>
              <div class="pricing-amount"><sup>$ </sup>300<span> mo</div>
            </div>
            <div class="pricing-dtl">
              <ul>
                <li>3 Beds</li>
                <li>3 Bathroom</li>
                <li>1 Hall</li>
                <li>1 Kitchen</li>
                <li>Ac</li>
                <li>Parking</li>
              </ul>
              <a href="#" class="btn btn-default btn-pricing">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="pricing-plan-block text-center">
            <div class="pricing-top">
              <h5 class="pricing-heading">Platinum</h5>
              <div class="pricing-amount"><sup>$ </sup>400<span> mo</div>
            </div>
            <div class="pricing-dtl">
              <ul>
                <li>4 Beds</li>
                <li>4 Bathroom</li>
                <li>2 Hall</li>
                <li>1 Kitchen</li>
                <li>Ac</li>
                <li>Parking</li>
              </ul>
              <a href="#" class="btn btn-default btn-pricing">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="pricing-plan-block text-center">
            <div class="pricing-top">
              <h5 class="pricing-heading">Diamond</h5>
              <div class="pricing-amount"><sup>$ </sup>600<span> mo</div>
            </div>
            <div class="pricing-dtl">
              <ul>
                <li>6 Beds</li>
                <li>8 Bathroom</li>
                <li>3 Hall</li>
                <li>2 Kitchen</li>
                <li>Ac</li>
                <li>Parking</li>
              </ul>
              <a href="#" class="btn btn-default btn-pricing">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end pricing paln -->


<!-- footer -->
@include('partial.footer')
<!--  end footer -->
@endsection
