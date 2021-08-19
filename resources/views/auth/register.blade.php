@extends('layouts/index')
@section('contents')
    <!--  navigation -->
  <nav class="navbar navbar-default navbar-fixed-top top-nav-collapse affix">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="logo" href="{{ route('index') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="100px" style="padding: 6px;"></a>
      </div>      
      <!-- navbar-collapse -->
    </div><!-- container -->
  </nav>
<!--  end navigation -->
<!--  contact form-->
  <div id="contact" class="contact-main-block">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="com-md-6 col-md-offset-3">
          <form class="login" method="POST" action="{{ route('register') }}">
            @csrf
            <img src="{{ asset('assets/images/logo1.png') }}" width="100px" alt="">
            <p class="title">Sign Up</p>
            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Username" autofocus>
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            <i class="fa fa-user"></i>
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            <i class="fa fa-envelope"></i>
             <input id="phone" type="tel" class="tel-phone @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone">
                @error('phone')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            <!-- <i class="fa fa-phone" aria-hidden="true"></i>     -->
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            <i class="fa fa-key"></i>
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="confirm Password">
            <i class="fa fa-key"></i>
            <div class="form-group">             
              <select id="country" name="country_id" class="form-control">
                <option value="" selected>Select Country</option>
                @foreach($countries as $country)
                    <option value="{{$country->id}}">{{ $country->name }}</option>
                @endforeach
              </select>              
            </div>
            <div class="form-group">             
              <select id="state" name="state_id" class="form-control">
                <option value="" selected>Select State</option>
              </select>          
            </div>           
            <div class="form-group">              
              <select id="city" name="city_id" class="form-control">
                <option value="" selected>Select City</option>
              </select>             
            </div>
            <div class="form-group">
              <input type="text" id="conpany Name" name="company_name" placeholder="Enter Conpany Name" required>
            </div>
            <button type="submit">                      
              <span class="state">Sign Up</span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
<!--  end contact form -->
<!-- footer -->

<!--  end footer -->

@endsection
