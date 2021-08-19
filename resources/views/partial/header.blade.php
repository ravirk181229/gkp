 <!--  top bar -->
  <div class="top-bar">
  </div>
<!--  end top bar -->

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
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li id='gbl' class="dropdown  glbdropdown"><a href="#" class="dropdown-toggle" data-toggle="d ropdown">Delhi </a>
            <ul class="dropdown-menu multi-level glb">
              <li>
                <a href="">
                  <div class="container" style="max-width: 250px;">
                    <div class="">
                      <div class="col-12">
                        <form>                     
                          <div class="form-check city-box">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="" width="30px;">
                            <label class="form-check-label" for="exampleRadios1">
                              India
                            </label>
                          </div>
                          <li role="separator" class="divider"></li>
                          <div class="form-check city-box">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="" width="30px;">
                            <label class="form-check-label" for="exampleRadios1">
                              India
                            </label>
                          </div>
                          <li role="separator" class="divider"></li>
                          <div class="form-check city-box">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="" width="30px;">
                            <label class="form-check-label" for="exampleRadios1">
                              India
                            </label>
                          </div>
                          <li role="separator" class="divider"></li>
                          <div class="form-check city-box">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="" width="30px;">
                            <label class="form-check-label" for="exampleRadios1">
                              India
                            </label>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li role="separator" class="divider" style="border: 2px solid red;"></li>
              <li>
                <a href="">
                  <div class="container" style="max-width: 250px;">
                    <div class="d-flex">
                      <div class="col-12">
                        <div class="container-search">                         
                          <input type="text" id="search" placeholder="Search..." />                           
                        </div>
                      </div>
                     <h6>Top City</h6>                          
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="city-imgs">
                  <a href="" style="margin: 10px;" >
                    <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="">
                    <p>India</p>                                     
                  </a>
                  <a href=""style="margin: 10px;" >
                    <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="">
                    <p>India</p>                  
                  </a>
                  <a href="" style="margin: 10px;">
                    <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="">
                    <p>India</p>                  
                  </a>
                </div>
                <div class="city-img">
                  <a href="" style="margin: 10px;">
                    <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="">
                    <p>India</p>                  
                  </a>
                  <a href="" style="margin: 10px;">
                    <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="">
                    <p>India</p>                  
                  </a>
                  <a href="" style="margin: 10px;">
                    <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="">
                    <p>India</p>                  
                  </a>
                </div>                
              </li>
              <li role="separator" class="divider"></li> 
              <li><a href="">
                <h6>Other Cities</h6>
              </a></li>
              <li ><a href="index.html">Home Page 1</a></li> 
              <li role="separator" class="divider"></li>
              <li ><a href="index.html">Home Page 1</a></li> 
              <li role="separator" class="divider"></li>
               <li ><a href="index.html">Home Page 1</a></li> 
              <li role="separator" class="divider"></li>
              <li ><a href="index.html">Home Page 1</a></li>               
            </ul>
          </li> 
         <!--  <li class="dropdown active"><a href="#">Services</a>           
          </li>  -->
          <li><a href="{{ route('about') }}">About us</a></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools</a>
            <ul class="dropdown-menu multi-level tools-map">
              <li>
                <div class="tools-mapin" style="display: flex;">
                  <a href="" style="border-right: 1px solid #ccc;">
                    <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="">
                    <p>City Heatmap</p>                                                      
                  </a>
                  <a href="">
                    <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="">  
                    <p>Recomendations</p>                                  
                  </a>                  
                </div>                          
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <div class="tools-mapin" style="display: flex;">
                  <a href="" style="border-right: 1px solid #ccc;">
                    <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="">
                    <p>Price v size</p>                                                       
                  </a>
                  <a href="">
                    <img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="">
                    <p>Loan Eligiability</p>                                  
                  </a>                  
                </div>                          
              </li>                                             
            </ul>
          </li>         
          <li><a href="{{ route('blog.categories') }}">Blog</a></li>          
          <li><a href="{{ route('pricing') }}">Pricing</a>
          <li><a href="{{ route('property.show') }}">Property</a>
          <li  class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">more...</a>
            <ul class="dropdown-menu multi-level">
              <li><a href="{{ route('careers') }}">Careers</a></li>
              <li role="separator" class="divider"></li>   
              <li><a href="{{ route('policies') }}">Policies</a></li>            
              <li role="separator" class="divider"></li>
              <li><a href="{{ route('term') }}">Term and conditions</a></li>            
              <li role="separator" class="divider"></li>
              <li><a href="{{ route('contact') }}">contact us</a></li>            
              <li role="separator" class="divider"></li>
            </ul> 
          </li>         
        </ul>
        <ul class="nav navbar-nav navbar-right">         
           <li  class="dropdown glbdropdown profile"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true" style="padding-right: 5px;"></i>profile</a>
            <ul class="dropdown-menu multi-level right-profile">
              <div class="text-center" style="margin-top: 10px; margin-bottom: 10px;"> 
              @guest
                    <a href="{{ route('login') }}"><button class="btn btn-primary btn-lg"  >login</button></a>
                  @if (Route::has('register'))          
                    <a href="{{ route('register') }}"><button class="btn btn-danger btn-lg">sing up</button></a>
                  @endif
                @else                  
                <a>{{ Auth::user()->name }}</a>                
                 <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn btn-danger btn-lg"  >Logout</button></a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
                 </form>
                 <br>
                <div style="text-align: left;">
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('user.account') }}">My Account</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('profile') }}">My Profile</a></li>
                  <li role="separator" class="divider"></li>
                  @if(Auth::user()->is_admin == 1)
                    <li>
                      <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                  @endif    
                </div>  
                @endguest      
              </div>              
            </ul> 
          </li>
        </ul>
      </div>
      <!-- navbar-collapse -->
    </div><!-- container -->
  </nav>