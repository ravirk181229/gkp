@extends('layouts/index')
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
									<li style="width: 50%;">Welcome</li>
									<li style="width: 50%;" class="log-btn">
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
								<a href="{{ route('builder.create') }}">Add Your Property</a>
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
			<div class="col-md-9 col-sm-8">
				<div class="text">
					<h2>Basic Card</h2>
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
								<h6>Your Listing Score</h6>
								<p>Score Too Low! Add more details and pictures to improve this.</p>
							</div>
						</div>
					</div>
					{{-- <div class="card m-t">
						<div class="card-body">
							<div>
								<h5>Your Listing Score</h5>
							</div>
							<div class="list-score">
								<form>
									<div class="form-check" style="padding-right: 15px;">
										<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
										<img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="" width="30px;">
										<label class="form-check-label" for="exampleRadios1">
											India
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
										<img src="{{ asset('assets/images/svgimg/in-flag-icon.svg') }}" alt="" width="30px;">
										<label class="form-check-label" for="exampleRadios1">
											United Arab Emirates
										</label>
									</div>
								</form>
							</div>
						</div>
					</div> --}}
					<div class="card m-t">
						<div class="card-body p-3">
						<form action="{{ route('builder.store') }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-md-12">
		              <div class="control-group after-add-more">
		              <label class="form-label">Property</label>	              
			              <div class="form-group">
			                <label for="title">Title</label>
			                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', '') }}">
			                 @error('title')
					              <span class="invalid-feedback" role="alert">
					                <strong>{{ $message }}</strong>
					              </span>
					            @enderror
			              </div>
			              <div class="form-group">
			                <label for="min_price">Min Price</label>
			                <input type="number" name="min_price" class="form-control @error('min_price') is-invalid @enderror" value="{{ old('min_price', '') }}">
			                 @error('min_price')
					              <span class="invalid-feedback" role="alert">
					                <strong>{{ $message }}</strong>
					              </span>
					            @enderror
			              </div>
			              <div class="form-group">
			                <label for="max_price">Max Price</label>
			                <input type="number" name="max_price" class="form-control @error('max_price') is-invalid @enderror" value="{{ old('max_price', '') }}">
			                 @error('max_price')
					              <span class="invalid-feedback" role="alert">
					                <strong>{{ $message }}</strong>
					              </span>
					            @enderror
			              </div>
			              <div class="form-group">
			                <label for="details">Details</label>
			                <textarea name="details" id="details" class="form-control @error('details') is-invalid @enderror" cols="30" rows="10">{{ old('details', '') }}</textarea>
			                 @error('details')
					              <span class="invalid-feedback" role="alert">
					                <strong>{{ $message }}</strong>
					              </span>
					            @enderror
			              </div>
			              <div class="form-group">
			                <label for="list_details">list Details</label>
			                <textarea name="list_details" id="list_details" class="form-control @error('list_details') is-invalid @enderror" cols="30" rows="10">{{ old('list_details', '') }}</textarea>
			                 @error('list_details')
					              <span class="invalid-feedback" role="alert">
					                <strong>{{ $message }}</strong>
					              </span>
					            @enderror
			              </div>
			              <div class="form-group">
			                <label for="price_unit">Price Unit</label>
			                <input type="text" name="price_unit" class="form-control @error('price_unit') is-invalid @enderror" value="{{ old('price_unit', '') }}">
			                 @error('price_unit')
					              <span class="invalid-feedback" role="alert">
					                <strong>{{ $message }}</strong>
					              </span>
					            @enderror
			              </div>
			              <div class="form-group">
			                <label for="video_url">Video Url</label>					                
			                <input type="url" name="video_url" class="form-control @error('video_url') is-invalid @enderror" value="{{ old('video_url', '') }}">
			                 @error('video_url')
					              <span class="invalid-feedback" role="alert">
					                <strong>{{ $message }}</strong>
					              </span>
					            @enderror
			              </div>
			              <div class="text mb-3">Flore Plan</div>
									  <div class="form-group">
									    <div class="custom-file">
									      <input type="file" name="img[]" class="custom-file-input" id="floreimage" multiple>
									      <label class="custom-file-label" for="floreimage">Choose file</label>
									    </div>
									  </div>
									  <div class="text mb-3">Gallery</div>
									  <div class="form-group">	                    	
									    <div class="custom-file">
									      <input type="file" name="g_img[]" class="custom-file-input" id="gallery" multiple>
									      <label class="custom-file-label" for="gallery">Choose file</label>
									    </div>
									  </div>		              
		              </div>
	              </div>
	              <div class="col-md-12">			              	
								  <div class="text mb-3">Property Address</div>
								  <div class="form-group">
								    <label for="ad_line_1">Address Line 1</label>
								    <input type="text" name="ad_line_1" class="form-control @error('ad_line_1') is-invalid @enderror" value="{{ old('ad_line_1', '') }}">
	                 	@error('ad_line_1')
				              <span class="invalid-feedback" role="alert">
				                <strong>{{ $message }}</strong>
				              </span>
			            	@enderror
								  </div>
								  <div class="form-group">
								    <label for="ad_line_2">Address Line 2</label>
								    <input type="text" name="ad_line_2" class="form-control @error('ad_line_2') is-invalid @enderror" value="{{ old('ad_line_2', '') }}">
	                 	@error('ad_line_2')
				              <span class="invalid-feedback" role="alert">
				                <strong>{{ $message }}</strong>
				              </span>
			            	@enderror                 
								  </div>
								  <div class="form-group">
                    <label for="section-title">Select Country</label>
                    <select id="country" name="country_id" class="form-control @error('country_id') is-invalid @enderror">
                      <option value="" selected>----------</option>
                      @foreach($countries as $country)
                      	<option value="{{$country->id}}">{{ $country->name }}</option>
                      @endforeach
                    </select>
                    @error('country_id')
				              <span class="invalid-feedback" role="alert">
				                <strong>{{ $message }}</strong>
				              </span>
				            @enderror
                  </div>
								  <div class="form-group">
                    <label for="section-title">Select State</label>
                    <select id="state" name="state_id" class="form-control @error('state_id') is-invalid @enderror">
                      <option value="" selected>----------</option>
                    </select>
                    @error('state_id')
				              <span class="invalid-feedback" role="alert">
				                <strong>{{ $message }}</strong>
				              </span>
					          @enderror
                  </div>
								  <div class="form-group">
                    <label for="section-title">Select City</label>
                    <select id="city" name="city_id" class="form-control @error('city_id') is-invalid @enderror">
                      <option value="" selected>----------</option>
                    </select>
                    @error('city_id')
				              <span class="invalid-feedback" role="alert">
				                <strong>{{ $message }}</strong>
				              </span>
				            @enderror
                  </div>
								  <div class="form-group">
								    <label for="land_mark">Land Mark</label>
								    <input type="text" name="land_mark" class="form-control @error('land_mark') is-invalid @enderror" value="{{ old('land_mark', '') }}">
		                 @error('land_mark')
				              <span class="invalid-feedback" role="alert">
				                <strong>{{ $message }}</strong>
				              </span>
				            @enderror	                 
								  </div>
								  <div class="form-group">
								    <label for="pin_code">Pin Code</label>
								    <input type="text" name="pin_code" class="form-control @error('pin_code') is-invalid @enderror" value="{{ old('pin_code', '') }}">
		                @error('pin_code')
				              <span class="invalid-feedback" role="alert">
				                <strong>{{ $message }}</strong>
				              </span>
				            @enderror			                 
								  </div>
								  <div class="form-group">
                    <label class="form-label">Amenity</label>
                    <div class="row gutters-xs" style="margin-bottom: 30px;">
                    	@foreach ($amenities as $amenity)
                        <div class="col-sm-4">
                          <label class="colorinput">
                            <input name="amenities[]" type="checkbox" value="{{ $amenity->id }}" class="colorinput-input">
                            <span class="colorinput-color bg-primary"></span>
                            <span class="amenity-item">{{ $amenity->name }}</span>
                          </label>
                        </div>
                      @endforeach
                    </div>
                  </div>	                    
	              </div>
							</div>		              
              <div class="card-footer text-right">
                <button type="submit"class="btn btn-lg btn-primary">Submit</button>
              </div>
            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  end blog details -->
	
	@include('partial.footer')
	@endsection