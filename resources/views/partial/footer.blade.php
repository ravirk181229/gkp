<div id="footer" class="footer-main-block">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="footer-widget">     
            <div class="footer-img">       
              <img src="{{ asset('assets/images/logo.png') }}" class="img-responsive" alt="footer-logo" width="150px">
            </div>
            <div class="footer-sep"></div>
            <div class="footer-social">
              <ul>
                <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>                
                <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="footer-sep"></div>
            <p>Company Name, 1756 Raleway Colony, Address Line 2, City, State, Country, 78612</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="usful-widget">
            <h4 class="footer-heading">Useful Links</h4>
            <ul>
              <li>- <a href="{{ route('index') }}">Home</a></li>
              <li>- <a href="{{ route('about') }}">About us</a></li>
              <li>- <a href="{{ route('blog.categories') }}">Blog</a></li>
              <li>- <a href="{{ route('pricing') }}">Pricing</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="usful-widget">
            <h4 class="footer-heading">About GKP Property</h4>
            <ul>
              <li>- <a href="{{ route('careers') }}">Careers</a></li>
              <li>- <a href="{{ route('policies') }}">Policy</a></li>
              <li>- <a href="{{ route('contact') }}">Contact us</a></li>              
              <li>- <a href="{{ route('term') }}">Terms &amp; Conditions</a></li>   
            </ul>
          </div>                   
        </div>
      </div>
    </div>
  </div>