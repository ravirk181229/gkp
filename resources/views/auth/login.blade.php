@extends('layouts.index')
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
       <div class="col-md-6 col-md-offset-4">
          <form class="login" method="POST" action="{{ route('login') }}">
          @csrf
          <img src="{{ asset('assets/images/logo1.png') }}" width="100px" alt="">
          <p class="title">Sign In</p>
          <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail" autofocus>
           @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <i class="fa fa-user"></i>
          <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
            <i class="fa fa-key"></i>
          <div style="display: flex;">
             <input class="form-check-input" style="width: 20px;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
             <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
          </div>
          <i class="fa fa-key"></i>          
          <a href="{{ route('password.request') }}" class="text-white">I forgot my password</a>
          <button type="submit">                      
            <span class="state">Sign In</span>
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
