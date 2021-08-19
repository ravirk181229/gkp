@extends('layouts/index')
@section('title', 'CAREERS')
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
      <h3 class="page-baner-hedding">Career</h3>  
      <ol class="breadcrumb">
        <li><a href="{{ route('index') }}">Home</a></li>
        <li class="active">Career</li>
      </ol>     
    </div> 
  </div>
<!--  end page banner -->
<!--  gallery -->
  <div id="gallery" class="gallery-main-block gallery-full-width">
    <div class="container-fluid">
      <div class="row popup-gallery">
        <div class="col-md-4 col-sm-6">
          <div class="gallery-block">
            <div class="gallery-img">
              <img src="{{ asset('assets/images/gallery/gallery-01.jpg') }}" class="img-responsive" alt="gallery-1">
              <div class="overlay-bg"></div>              
            </div>
            <div class="gallery-dtl text-center">         
              <a href="{{ asset('assets/images/gallery/gallery-01.jpg') }}" title="Your Image Title"><i class="fa fa-search" aria-hidden="true"></i></a>
              <h4 class="city-name">Property Name</h4>  
              <p>Authoritatively coordinate distributed imperatives whereas enterprise-wide growth strategies.</p>              
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gallery-block">
            <div class="gallery-img">
              <img src="{{ asset('assets/images/gallery/gallery-02.jpg') }}" class="img-responsive" alt="gallery-2">
              <div class="overlay-bg"></div>              
            </div>
            <div class="gallery-dtl text-center">         
              <a href="images/gallery/gallery-02.jpg" title="Your Image Title"><i class="fa fa-search" aria-hidden="true"></i></a>
              <h4 class="city-name">Property Name</h4>  
              <p>Authoritatively coordinate distributed imperatives whereas enterprise-wide growth strategies.</p>              
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gallery-block">
            <div class="gallery-img">
              <img src="{{ asset('assets/images/gallery/gallery-03.jpg') }}" class="img-responsive" alt="gallery-3">
              <div class="overlay-bg"></div>              
            </div>
            <div class="gallery-dtl text-center">         
              <a href="{{ asset('assets/images/gallery/gallery-03.jpg') }}" title="Your Image Title"><i class="fa fa-search" aria-hidden="true"></i></a>
              <h4 class="city-name">Property Name</h4>
              <p>Authoritatively coordinate distributed imperatives whereas enterprise-wide growth strategies.</p>                
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gallery-block">
            <div class="gallery-img">
              <img src="{{ asset('assets/images/gallery/gallery-04.jpg') }}" class="img-responsive" alt="gallery-4">
              <div class="overlay-bg"></div>              
            </div>
            <div class="gallery-dtl text-center">         
              <a href="{{ asset('assets/images/gallery/gallery-04.jpg') }}" title="Your Image Title"><i class="fa fa-search" aria-hidden="true"></i></a>
              <h4 class="city-name">Property Name</h4>    
              <p>Authoritatively coordinate distributed imperatives whereas enterprise-wide growth strategies.</p>            
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gallery-block">
            <div class="gallery-img">
              <img src="{{ asset('assets/images/gallery/gallery-05.jpg') }}" class="img-responsive" alt="gallery-5">
              <div class="overlay-bg"></div>              
            </div>
            <div class="gallery-dtl text-center">         
              <a href="{{ asset('assets/images/gallery/gallery-05.jpg') }}" title="Your Image Title"><i class="fa fa-search" aria-hidden="true"></i></a>
              <h4 class="city-name">Property Name</h4> 
              <p>Authoritatively coordinate distributed imperatives whereas enterprise-wide growth strategies.</p>               
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gallery-block">
            <div class="gallery-img">
              <img src="{{ asset('assets/images/gallery/gallery-06.jpg') }}" class="img-responsive" alt="gallery-6">
              <div class="overlay-bg"></div>              
            </div>
            <div class="gallery-dtl text-center">         
              <a href="images/gallery/gallery-06.jpg" title="Your Image Title"><i class="fa fa-search" aria-hidden="true"></i></a>
              <h4 class="city-name">Property Name</h4>    
              <p>Authoritatively coordinate distributed imperatives whereas enterprise-wide growth strategies.</p>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end gallery -->
<!--  testimonials -->
  <div id="testimonials" class="testimonials-main-block">
    <div class="container">
      <div class="section text-center">
        <div class="section-style"></div>
        <h2 class="section-heading">Meet Our Team</h2>
        <p class="sub-heading">Great words from our client says</p>
      </div> 
      <div class="row">
        <div class="col-md-6 hidden-xs">
          <div class="testimonials-block-video">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>      
          </div>
        </div>
        <div class="col-md-6 hidden-xs">
          <div class="testimonials-block-video">
            <div class="video-item">
              <iframe width="550" height="300" src="https://www.youtube-nocookie.com/embed/TiZ8iWqEvKE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> 
          </div>
        </div>
        <div class="col-md-6 hidden-xs">
          <div class="testimonials-block-video">
            <div class="video-item">
              <iframe width="550" height="300" src="https://www.youtube-nocookie.com/embed/TiZ8iWqEvKE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> 
          </div>
        </div>
        <div class="col-md-6 hidden-xs">
          <div class="testimonials-block-video">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>      
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end testimonials -->
<!-- footer -->
@include('partial.footer')
<!--  end footer -->
@endsection
