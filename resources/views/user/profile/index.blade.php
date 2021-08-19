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
<div class="container">             
  <div class="row">           
    <div class="col-sm-8 col-md-offset-3">
      <div class="blog-block-page">            
        <div class="blog-comment-send">
          <h6 class="comments-heading">Profile Summary</h6>              
          <div class="row">                
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body" style="display: flex;">
                  <div class="progress blue">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">0%</div>
                  </div>
                  <div class="listing-card">
                    <h6>Profile Completeness</h6>
                    <p>You are NaN% away from reward, Complete today</p>
                  </div>
                </div>
                <hr>
                <div class="text-center" style="margin-top: 15px;">
                 <button type="submit" class="btn btn-success btn-lg btn-block" data-toggle="modal" href="#profile_modal">Complete Your Profile</button>
                </div>
              </div>      
            </div>
          </div>
        </div>
      </div>
    </div>        
  </div>
</div>
  <!-- Choose profile -->
<div class="modal fade" id="profile_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Choose Profile</h5>
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

@endsection