<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="" style="width: 200px; margin-top: 5px;"></a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/logo2.png') }}" width="50px" alt=""></a>
  </div>
  <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    <a href="{{ route('index') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">Home</a>
    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">Dashboard</a>
    <a href="{{ route('country.index') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">Country</a>
    <a href="{{ route('state.index') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">State</a>
    <a href="{{ route('city.index') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">City</a>
    <a href="{{ route('amenity.index') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">Amenity</a>
    <a href="{{ route('property.index') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">Property</a>
    <a href="{{ route('category.index') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">Category</a>
    <a href="{{ route('post.index') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">Post</a>
    <a href="{{ route('banner.index') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">Banner video</a>
  </div>
      
</aside>