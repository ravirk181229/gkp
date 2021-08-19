@extends('layouts/index')
@section('title', 'ABOUT')
@section('contents')
<!--  top bar -->
<!--  end top bar -->
<!--  navigation -->
 @include('partial.header')
<!--  end navigation -->
<!--  page banner -->
  <div id="page-banner" class="page-banner-main" style="background-image: url('{{ asset('assets/images/homebanner.jpg') }}')">
  <div class="overlay-bg"></div>    
    <div class="page-banner-text text-center">
      <h3 class="page-baner-hedding">About Us</h3>  
      <ol class="breadcrumb">
        <li><a href="{{ route('index') }}">Home</a></li>
        <li class="active">About</li>
      </ol>     
    </div>
  </div>
<!--  end page banner -->
<!--  download app -->
  <div id="download-app" class="download-app-main-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">          
          <div class="app-search text-center">
            <h3 class="app-heading">About our company</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br/>
            It’s free, easy and s
            mart.</p>           
          </div>  
        </div>
      </div>
    </div>
  </div>
<!--  end download app -->
<!--  facts -->
  <div id="facts" class="facts-main-block">
    <div class="parallax" style="background-image: url('{{ asset('assets/images/homebanner-2.jpg') }}')">
      <div class="overlay-bg"></div>
      <div class="container">    
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="facts-block text-center">
              <h1 class="facts-number counter">5000</h1>
              <p>Listing</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="facts-block text-center">
              <h1 class="facts-number counter">3000</h1>
              <p>For Rent</p>              
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="facts-block text-center">
              <h1 class="facts-number counter">2000</h1>
              <p>For Sale</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="facts-block text-center">
              <h1 class="facts-number counter">800</h1>
              <p>Agents</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end facts -->
<!--  testimonials -->
  <div id="testimonials" class="testimonials-main-block">
    <div class="container">
      <div class="section text-center">
        <div class="section-style"></div>
        <h2 class="section-heading">Testimonials</h2>
        <p class="sub-heading">Great words from our client says</p>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="testimonial-block text-center">
            <div class="client-dtl">
              <div class="quote-icon"><img src="{{ asset('assets/images/icons/quote.png') }}" class="img-responsive" alt="quote.png"></div>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page layout. The point of using Lorem Ipsum is that it has a more-or-less</p>
            </div>       
            <div class="client-img">
              <img src="{{ asset('assets/images/client-01.jpg') }}" class="img-responsive" alt="client-01">             
            </div>
            <h6 class="client-name">Tanya Martine</h6>
            <p class="client-post">Company Name, Designation</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="testimonial-block text-center">
            <div class="client-dtl text-center">
              <div class="quote-icon"><img src="{{ asset('assets/images/icons/quote.png') }}" class="img-responsive" alt="quote.png"></div> 
              <p>It is a long established fact that a reader will be distracted by the readable content of a page layout. The point of using Lorem Ipsum is that it has a more-or-less</p>
            </div>       
            <div class="client-img">
              <img src="{{ asset('assets/images/client-02.jpg') }}" class="img-responsive" alt="client-02">
            </div>
            <h6 class="client-name">Tanya Martine</h6>
            <p class="client-post">Company Name, Designation</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="testimonial-block text-center">
            <div class="client-dtl text-center">
              <div class="quote-icon"><img src="{{ asset('assets/images/icons/quote.png') }}" class="img-responsive" alt="quote.png"></div> 
              <p>It is a long established fact that a reader will be distracted by the readable content of a page layout. The point of using Lorem Ipsum is that it has a more-or-less</p>
            </div>       
            <div class="client-img">
              <img src="{{ asset('assets/images/client-03.jpg') }}" class="img-responsive" alt="client-03">
            </div>
              <h6 class="client-name">Tanya Martine</h6>
              <p class="client-post">Company Name, Designation</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end testimonials -->
<!--  patners -->
  <div id="patners" class="patners-main-block">
    <div class="container">
      <div class="section text-center">
        <div class="section-style"></div>
        <h2 class="section-heading">Our Patners</h2>
        <p class="sub-heading">Great words from our client says</p>
      </div>    
      <div class="row">
        <div class="swiper-container patners-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="col-md-2 col-sm-4">
                <div class="patners-img">
                  <a href="#"><img src="{{ asset('assets/images/icons/patners-1.png') }}" class="img-responsive" alt="patners1"></a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="patners-img">
                  <a href="#"><img src="{{ asset('assets/images/icons/patners-2.png') }}" class="img-responsive" alt="patners2"></a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="patners-img">
                  <a href="#"><img src="{{ asset('assets/images/icons/patners-3.png') }}" class="img-responsive" alt="patners3"></a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="patners-img">
                  <a href="#"><img src="{{ asset('assets/images/icons/patners-4.png') }}" class="img-responsive" alt="patners4"></a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="patners-img">
                  <a href="#"><img src="{{ asset('assets/images/icons/patners-5.png') }}" class="img-responsive" alt="patners5"></a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="patners-img">
                  <a href="#"><img src="{{ asset('assets/images/icons/patners-6.png') }}" class="img-responsive" alt="patners6"></a>
                </div>
              </div>
            </div>    
            <div class="swiper-slide">
              <div class="col-md-2 col-sm-4">
                <div class="patners-img">
                  <a href="#"><img src="{{ asset('assets/images/icons/patners-6.png') }}" class="img-responsive" alt="patners7"></a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="patners-img">
                  <a href="#"><img src="{{ asset('assets/images/icons/patners-5.png') }}" class="img-responsive" alt="patners8"></a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="patners-img">
                  <a href="#"><img src="{{ asset('assets/images/icons/patners-4.png') }}" class="img-responsive" alt="patners9"></a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="patners-img">
                  <a href="#"><img src="{{ asset('assets/images/icons/patners-3.png') }}" class="img-responsive" alt="patners10"></a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="patners-img">
                  <a href="#"><img src="{{ asset('assets/images/icons/patners-2.png') }}" class="img-responsive" alt="patners11"></a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="patners-img">
                  <a href="#"><img src="{{ asset('assets/images/icons/patners-1.png') }}" class="img-responsive" alt="patners12"></a>
                </div>
              </div>
            </div>
          </div>
        </div> 
        
      </div>
    </div>
  </div>
<!--  end patners -->
<!--  twitter feed -->
  <div id="twitter-feed" class="twitter-feed-main-block">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="twitter-feed-block text-center">
              <div class="twitter-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
              <h6 class="twitter-heading clr-red">#Property</h6>
              <p>It is a long established fact that a reader will be dist layout lorem.</p> 
              <div class="twitter-hours"><p><i class="fa fa-clock-o"></i> 2 hrs ago</p></div>           
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="twitter-feed-block text-center">
            <div class="twitter-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
            <h6 class="twitter-heading clr-green">#Interior</h6>
            <p>It is a long established fact that a reader will be dist layout lorem.</p>
            <div class="twitter-hours"><p><i class="fa fa-clock-o"></i> 2 hrs ago</p></div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="twitter-feed-block text-center">
            <div class="twitter-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
            <h6 class="twitter-heading clr-blue">#Property</h6>
            <p>It is a long established fact that a reader will be dist layout lorem.</p>
            <div class="twitter-hours"><p><i class="fa fa-clock-o"></i> 2 hrs ago</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end twitter feed -->


<!-- footer -->
@include('partial.footer')
<!--  end footer -->
@endsection
