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
<!--  contact form-->
  <div id="contact" class="contact-main-block">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-6 col-md-offset-3">
          <div class="text-center">
          {!! QrCode::size(250)->generate('gharkapatta.com'); !!}
            <form class="">
              <div class="form-group">                      
                <input type="text" class="form-control" placeholder="Qr code">
              </div>
              <a href="#" type="submit" role="button" class="btn btn-default pull-right">submit qr code</a>                   
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end contact form -->

<!-- footer -->
@include('partial.footer')
<!--  end footer -->
@endsection
