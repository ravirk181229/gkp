@extends('layouts/index')
@section('title', 'CONTACT')
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
        <h3 class="page-baner-hedding">Contact Us</h3>  
        <ol class="breadcrumb">
          <li><a href="{{ route('index') }}">Home</a></li>
          <li class="active">Contact</li>
        </ol>     
      </div> 
  </div>
<!--  end page banner -->
<!--  contact -->
  <div id="contact-address-two" class="contact-address-two">
    <div class="container">
      <div class="section text-center">
        <div class="section-style"></div>
        <h2 class="section-heading">If you can't find an answer, feel free to contact us.</h2>
      </div>
      <div class="contact-address-two-block text-center">
        <p>Company Name, 1756 Raleway Colony, Address Line 2, City, State, Country, 78612</p>
        <p><i class="fa fa-phone"></i> (+91) 123-456-7891</p>
        <p><i class="fa fa-envelope"></i> mail@extemplate.com</p>
      </div>
    </div>
  </div>
<!--  end contact-->
<!--  contact form-->
  <div id="contact" class="contact-main-block">
    <div class="container">
      <div class="row">
        <form method="post" action="{{ route('savecontact') }}">
          @csrf
          <div class="col-sm-6">          
            <div class="form-group">
              <label>Name</label>
               <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">
               @error('name')
                 <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
               @enderror
            </div>
            <div class="form-group">
              <label>Email</label>
               <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
               @error('email')
                 <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
               @enderror
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" name="phone_number">
               @error('phone_number')
                 <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
               @enderror
            </div>   
          </div>
          <div class="col-sm-6">         
            <div class="form-group">
              <label>Subject</label>
               <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
               @error('subject')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
               @enderror
              </div>
            <div class="form-group">
              <label>Message</label>
              <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
              @error('message')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>      
            <button type="submit" class="btn btn-primary">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!--  end contact form -->


<!-- footer -->
@include('partial.footer')
<!--  end footer -->
@endsection
