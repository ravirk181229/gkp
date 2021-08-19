@extends('layouts/index')
@section('title', 'HOME')
@section('contents')
<!--  top bar -->

<!--  end top bar -->
<!--  navigation -->
 @include('partial.header')
<!--  end navigation -->
<!--  slider -->
  <div id="home-banner" class="swiper-container home-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="home-slider-bg" style="background-image: url('{{ asset('assets/images/homebanner-3.jpg') }}')">
        <div class="overlay-bg"></div> 
        </div>   
      </div>
      <div class="swiper-slide">
        <div class="home-slider-bg" style="background-image: url('{{ asset('assets/images/homebanner-2.jpg') }}')">
        <div class="overlay-bg"></div> 
        </div>
      </div>
      <div class="swiper-slide">
       <div class="home-slider-bg" style="background-image: url('{{ asset('assets/images/homebanner.jpg') }}')">
        <div class="overlay-bg"></div> 
        </div>
      </div>                
    </div>
    <div class="home-slider-text-block">
      <div class="container m-t">
        <div class="row text-center">
          <div class="col-12 col-sm-6">
            <div class="video-box">
              @foreach($banners->take(1) as $banner)
                <iframe width="320" height="220" src="{{ $banner->video_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              @endforeach
            </div>
          </div>
          <div class="col-12 col-sm-6" style="margin-top: 20px;">
            <h2 class="baner-hedding">What is </h2>
            <h2 class="baner-hedding"><span>Gharkapata?</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>    
<!--  end slider -->
<!-- client -->
<div class="desktopRoadBlockBanner">
  <a target="_blank" href="{{ route('index') }}">
    <img class="img-responsive" src="https://sqconnect.s3.ap-south-1.amazonaws.com/mailers/onsite-30-07-20/1920x300.jpg" alt="road-blocks-banner">
  </a>
</div>
<!-- end client -->
<!--  looking for -->
  <div id="looking-for" class="looking-for-main-block">
    <div class="container">
      <div class="section text-center">
        <div class="section-style"></div>
        <h2 class="section-heading">Delhi NCR Real Estate</h2>
        <P>Delhi, the Capital of India, is a melting pot of cultures, brought and nourished here by people from all over the country. Delhi offers infinite opportunities for everyone who wishes to explore and settle here. Real Estate investment in this part of the country proves to be fruitful in no time</P>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="looking-for-block text-center">
            <div class="looking-for-icon">
              <a href="#"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a>
            </div>
            <a href="#"><h6 class="looking-for-heading">Builder</h6></a>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page layout. The point of using.<p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="looking-for-block text-center">
            <div class="looking-for-icon">
              <a href="#"><i class="fa fa-bank" aria-hidden="true"></i></a>
            </div>
            <a href="#"><h6 class="looking-for-heading">Buyer</h6></a>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page layout. The point of using.<p>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="looking-for-block text-center">
            <div class="looking-for-icon">
              <a href="#"><i class="fa fa-building" aria-hidden="true"></i></a>
            </div>
            <a href="#"><h6 class="looking-for-heading">Vender</h6></a>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page layout. The point of using.<p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="looking-for-block text-center">
            <div class="looking-for-icon">
              <a href="#"><i class="fa fa-building" aria-hidden="true"></i></a>
            </div>
            <a href="#"><h6 class="looking-for-heading">Vender</h6></a>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page layout. The point of using.<p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end looking for -->
<section style="background-color: #1A1A1A; padding-bottom: 50px;">
  <div class="container">
  <div class="section text-center">
    <div class="section-style"></div>
    <h2 class="section-heading">Explore Peoperties useing our tools</h2>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="tabBox">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="">Heatmaps</a></li>
          <li><a data-toggle="tab" href="#">Recommendations</a></li>
          <li><a data-toggle="tab" href="#">Price vs Size</a></li>
          <li><a data-toggle="tab" href="#">Loan Eligibility</a></li>
        </ul>
      </div>
    </div>
    <div class="home-map">
       <div class="col-md-6">
        <h3>HEATMAPS</h3>
        <p>An interactive map to help you understand a city’s real estate landscape. Colour coded to visually guide you through the hottest and coolest property micro markets in your city, based on the latest real estate prices.</p>
        <button class="btn btn-primary btn-lg">TRY IT</button>
      </div>
      <div class="col-md-6" style="text-align: -webkit-center;">
        <picture>
          <source class="img-responsive" data-srcset="https://static.squareyards.com/ui-assets/webp/heatmap-tool.webp" type="image/webp">
          <source class="img-responsive" data-srcset="https://static.squareyards.com/ui-assets/images/heatmap-tool.png" type="image/jpeg">
          <img itemprop="image" class="img-responsive lazy" data-src="https://static.squareyards.com/ui-assets/images/heatmap-tool.png" alt="heatmap-tool" src="https://static.squareyards.com/ui-assets/images/heatmap-tool.png">
        </picture>
      </div>
    </div>
  </div>  
</div>
</section>


<!--  recent property -->
  <div id="rct-property-three" class="rct-property-main-block-three">
    <div class="container">
      <div class="section text-center">
        <div class="section-style"></div>       
        <h2 class="section-heading">Our Properties</h2>
      </div>
    
      <div class="row">
        @foreach($properties as $property)
          <div class="col-md-4 col-sm-6">
            <div class="rct-property-block">            
              <div class="swiper-container property-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="{{ asset('storage/gallery/'.$property->gallery[0]->g_img) }}" class="img-responsive" alt="property-1">
                    <div class="overlay-bg"></div>
                  </div>                              
                </div>             
              </div>                        
              <div class="like-icon">
                <p><i class="fa fa-heart" aria-hidden="true"></i></p>
              </div>
              <div class="rct-property-dtl"> 
                <a href="{{ route('property.detail', [$property]) }}"><h6 class="property-heading">{{ $property->title }}</h6>               
                  <p class="property-address"><i class="fa fa-map-marker"></i>{{ $property->address->ad_line_1 }} {{ $property->address->ad_line_2 }}, {{ $property->address->city->name }}</p>
                <hr>
                <ul class="property-amenities">
                  @foreach($property->amenities->take(2)  as $amenity)
                    <li><i class="fa fa-bed"></i>{{ $amenity->name }}</li>                     
                  @endforeach
                </ul>
                </a>          
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
<!--  end recent property -->
<!--  info banner -->
  <div id="info-banner" class="info-banner-main-block">
    <div class="parallax" style="background-image: url('{{ asset('assets/images/bg/info-banner-bg.jpg') }}')">
    <div class="overlay-bg"></div>
      <div class="info-dtl text-center">
        <h3 class="info-heading">Sample of reports that we gonna provide</h3>
        <p class="info-post">Lorem ipsum dolor sit amet, ut debitis luptatum sea, te eos dico legere oportere, noster adolescens ad vel. Vim ut saepe graecis, eos id harum denique eligendi eam contentiones definitiones admodum</p>
        <a href="#" class="btn btn-default">Find Out</a>
      </div>
    </div>
  </div>
<!--  end info banner -->
<!--  pricing paln -->
  <div id="pricing-plan" class="pricing-plan-main-block">
    <div class="container">
      <div class="section text-center">
        <div class="section-style"></div>
        <h2 class="section-heading">Pade package</h2>
        <p class="sub-heading">accourding to your need</p>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="pricing-plan-block text-center">
            <div class="pricing-top">
              <h5 class="pricing-heading">Basic</h5>
             <!--  <div class="pricing-amount"><sup>$ </sup>200<span> mo</div> -->
            </div>
            <div class="pricing-dtl">
              <h6>Basic Information 5 project</h6>
              <div>
                <img src="{{ asset('assets/images/icons/piggy-bank.png') }}" alt="">
              </div>            
                <ul>
                  <li>Duration 3 months</li>
                  <li>Image update in 30 days interval</li>
                  <li>QR code</li>       
                </ul>      
                <em>Basic report</em>               
              <a href="#" class="btn btn-default btn-pricing">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="pricing-plan-block pricing-plan-special text-center">
            <div class="pricing-top">
              <h5 class="pricing-heading">BRONGE</h5>             
            </div>
            <div class="pricing-dtl">
              <h6>Complite Information 10 projects</h6>
              <div>
                <img src="{{ asset('assets/images/icons/cup-of-hot-chocolate.png') }}" alt="">
              </div> 
              <ul>
                <li>Duration: 3 months</li>
                <li>Image update in 30 days interval.</li>
                <li>City price map notification</li>
                <li>upcoming project</li>
                <li>360 degree view</li>
                <li>QR code</li>
              </ul>
              <em>Complete anilize report & expected ROI.</em>
              <a href="#" class="btn btn-default btn-pricing">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="pricing-plan-block text-center">
            <div class="pricing-top">
              <h5 class="pricing-heading">SILVER</h5>             
            </div>
           <div class="pricing-dtl">
              <h6>Complite Information 50 projects</h6>
              <div>
                <img src="{{ asset('assets/images/icons/hand-bag.png') }}" alt="">
              </div> 
              <ul>
                <li>Duration: 6 months</li>
                <li>Image update in 30 days interval.</li>
                <li>City price map notification</li>
                <li>upcoming project</li>
                <li>360 degree view</li>
                <li>Event striming</li>
                <li>QR code</li>
              </ul>
               <em>Complete anilize report & expected ROI.</em>
              <a href="#" class="btn btn-default btn-pricing">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="pricing-plan-block text-center">
            <div class="pricing-top">
              <h5 class="pricing-heading">GOLD</h5>             
            </div>
             <div class="pricing-dtl">
              <h6>Complite Information 50 projects</h6>
              <div>
                <img src="{{ asset('assets/images/icons/home.png') }}" alt="">
              </div> 
              <ul>
                <li>Duration: 6 months</li>
                <li>Image update in 30 days interval.</li>
                <li>City price map notification</li>
                <li>upcoming project</li>
                <li>360 degree view</li>
                <li>Event striming</li>
                <li>QR code</li>
              </ul>
              <em>Complete anilize report & expected ROI.</em>
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
