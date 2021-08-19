@extends('layouts/index')
@section('title', 'ACCOUNT')
@section('contents')

<!--  navigation -->
  <nav class="navbar navbar-default navbar-fixed-top top-nav-collapse affix">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="logo" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="100px" style="margin-top: 6px;"></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">        
        <ul class="nav navbar-nav navbar-right">
           <li><a href="#"></i>points</a>           
          </li>          
        </ul>    
      </div>
      <!-- navbar-collapse -->
    </div><!-- container -->
  </nav>
<!--  end navigation -->
<!-- blog left -->    
  <div id="blog-left" class="blog-single-main-block">
    <div class="container">
             
      <div class="row">  
        <div class="col-md-3 col-sm-4">
          <div class="row">
            <div class="card">          
              <div class="tab-widget"> 
                <div class="text-center welcome">
                  <ul>
                    <li style="margin-right: 50px;">Welcome</li>
                    <li class="log-btn">
                    	<i class="fa fa-sign-out" aria-hidden="true"></i>
                    	<a data-toggle="modal" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    	<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
		                   @csrf
		                 </form>
                    </li>
                  </ul>
                </div>          
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="recent-post">
                   <div class="some-wrapper">
                      <div class="inner-wrapper">
                        <span class="text" style="font-size: 10px;">100%</span>                       
                      </div>
                      <svg class="r-progress-bar" width="70" height="70" viewPort="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <circle class="bar" r="20" cx="40" cy="40" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
                      </svg>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="">
            <a href="{{ route('profile') }}">My Profile</a>
          </div>
          <div class="tab-widget" style="margin-top: 50px;">            
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="recent-post">
                <div class="tab-left-dtl">
                  <div class="left-nav-tab">
                    <img src="{{ asset('assets/images/icons/home.png') }}"width="25px" class="img-responsive" alt="Home">
                  </div>
                  <a href="{{ route('user.account') }}">My Account</a>
                </div>
                <hr>
                <div class="tab-left-dtl">
                  <div class="left-nav-tab">
                    <img src="{{ asset('assets/images/icons/house.png') }}"width="25px" class="img-responsive" alt="property">
                  </div>
                  <a data-toggle="modal" href="#property_modal">Add Your Property</a>
                </div>
                <hr>
                <div class="tab-left-dtl">
                  <div class="left-nav-tab">
                    <img src="{{ asset('assets/images/icons/lock.png') }}"width="25px" class="img-responsive" alt="lock">
                  </div>
                  <a href="{{ route('changepassword') }}">Manage Password</a>
                </div>
              </div>
            </div>
          </div>       
        </div>
        <!-- Choose profile -->
        <div class="modal fade" id="property_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Choose Property</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-center">
                <a href="{{ route('builder.create') }}" class="btn btn-primary btn-lg">Builder</a>
                <a href="{{ route('user') }}" class="btn btn-warning btn-lg">User</a>        
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>        
              </div>
            </div>
          </div>
        </div>
            <!-- end sign up --> 
        <div class="col-md-9 col-sm-8" style="padding-top: 25px; padding-bottom: 25px;"> 
          <div class="blog-block-page">
            <div class="blog-comment-send">
              <h3 class="comments-heading">Change Password</h3>
              <form class="contact-form" method="POST" action="{{ Route('update.password') }}" aria-label="{{ __('Reset Password') }}">
            		@csrf              
                <div class="form-group row">
		              <label for="oldpass" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>
		              <div class="col-md-6">
		                <input id="oldpass" type="password" class="form-control{{ $errors->has('oldpass') ? ' is-invalid' : '' }}" name="oldpass" value="{{ $oldpass ?? old('oldpass') }}" required autofocus>
		                @if ($errors->has('oldpass'))
		                <span class="invalid-feedback" role="alert">
		                  <strong>{{ $errors->first('oldpass') }}</strong>
		                </span>
		                @endif
		              </div>
		            </div>
		            <div class="form-group row">
		              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>
		              <div class="col-md-6">
		                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
		                @if ($errors->has('password'))
		                <span class="invalid-feedback" role="alert">
		                  <strong>{{ $errors->first('password') }}</strong>
		                </span>
		                @endif
		              </div>
		            </div>
		            <div class="form-group row">
		              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
		              <div class="col-md-6">
		                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
		              </div>
		            </div>
		            <div class="form-group row mb-0">
		              <div class="col-md-10 col-form-label text-md-right">
		                <button type="submit" class="btn btn-primary" style="float: right;">
		                {{ __('Reset Password') }}
		                </button>
		              </div>
		            </div>                   
              </form>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div>
<!--  end blog details -->

<!-- footer -->
@include('partial.footer')
<!--  end footer -->
@endsection
