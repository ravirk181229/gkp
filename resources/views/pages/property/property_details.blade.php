@extends('layouts/index')
@section('title', 'HOME')
@section('contents')
<!--  top bar -->

<!--  end top bar -->
<!--  navigation -->
 @include('partial.header')
<!--  end navigation -->

<!--  slider -->
  <div id="page-banner" class="page-banner-main" style="background-image: url('{{ asset('assets/images/homebanner.jpg') }}')">
    <div class="overlay-bg"></div>    
    <div class="page-banner-text text-center">
      <h3 class="page-baner-hedding">Property Details</h3>    
    </div>     
  </div>
<!--  end slider -->
<!--  heritage -->
 @if($property->is_varified == true)
 		 <div id="heritage" class="heritage-main-block">
    <div class="container"> 
      <div class="row"> 
        <div class="col-xs-6">  
          <div class="heritage-text">
            <h3>{{ $property->title }} : {{ $property->price_unit }}{{ $property->min_price }} - {{ $property->price_unit }}{{ $property->max_price }}</h3>
            <p>{{ $property->address->ad_line_1 }},  {{ $property->address->ad_line_2 }},  {{ $property->address->land_mark }} , {{ $property->address->city->name }}, {{ $property->address->state->name }}, {{ $property->address->country->name }}, {{ $property->address->pin_code }}</p>
          </div>
        </div>   
        <div class="col-xs-6">
          <div class="" style="margin-top: 20px; margin-bottom: 10px;">
            <img src="{{ asset('assets/images/qrcode/property.png') }}" alt="qr code" width="80">    
             <a href="#" class="btn btn-default" style="float: right;">Shortlist</a>
          </div>
        </div>
      </div>  
      <hr>
      <div class="heritage-tabs">
        <div class="row">
          <div class="col-md-9 col-sm-10 col-xs-9">
            <ul>
              <li><a class="page-scroll" href="#overview">Overview</a></li>
              <li><a class="page-scroll" href="#rating">rating</a></li>
              <li><a class="page-scroll" href="#amenities">Amenities</a></li>
              <li><a class="page-scroll" href="#floor-plan">Floor Plan</a></li>
              <li><a class="page-scroll" href="#chartContainer">Property Price Trand</a></li>
              <li><a class="page-scroll" href="#pichart-graph">Locality Price in Cities</a></li>
              <li><a class="page-scroll" href="#video-prop">Video</a></li>              
              <li><a class="page-scroll" href="#comments">Comments</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-2 col-xs-3 heritage-icons">
            <a href="#"><i class="fa fa-print" aria-hidden="true"></i></a>
            <a href="#" class="share-action"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
              <div class="share-container rounded">
                <a href='#'><i class="fa fa-facebook" aria-hidden="true"></i></a>    
                <a href='#'><i class="fa fa-twitter" aria-hidden="true"></i></a>    
                <a href='#'><i class="fa fa-google-plus" aria-hidden="true"></i></a>  
              </div>
          </div>
        </div>
      </div> 
    </div>     
  </div>
		<!--  end heritage -->
		<!--   property listing -->
		<div id="property-listing" class="property-listing-main-block">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-12 col-sm-12">
		        <div class="property-listing-block">            
		          <div class="swiper-container property-slider">
		            <div class="swiper-wrapper">
		              @foreach($property->gallery->take(3) as $gallery)
		              	<div class="swiper-slide">
			                <img src="{{ asset('storage/gallery/'.$gallery->g_img) }}" class="img-responsive" alt="property-1">
			              </div>
		              @endforeach
		            </div>
		            <div class="swiper-pagination home-pagination"></div>
		          </div>
		          <div class="label-sale-red">
		          	@if($property->is_sold == 1)
		            	<p>Sold</p>
			           @else
			           	<p>For Sale</p>
			           @endif          	
		          </div>
		          <div class="like-icon">
		            <p><i class="fa fa-heart" aria-hidden="true"></i></p>
		          </div>
		        </div>
		        <div id="overview" class="overview">
		          <h5 class="overview-heading">Overview</h5>
		          <hr>
		          <div class="overview-post">
		            <p>{!! $property->details !!}</p>
		          </div> 
		          <hr>
		        </div>
		        <div class="home-loan-block rating" id="rating">
		          <h5 class="loan-heading">Rating</h5>
		            <div id="full-stars-example">
		              <div class="rating-group">
		                  <input class="rating__input rating__input--none" name="rating" id="rating-none" value="0" type="radio">
		                  <label aria-label="No rating" class="rating__label" for="rating-none"><i class="rating__icon rating__icon--none fa fa-ban"></i></label>
		                  <label aria-label="1 star" class="rating__label" for="rating-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
		                  <input class="rating__input" name="rating" id="rating-1" value="1" type="radio">
		                  <label aria-label="2 stars" class="rating__label" for="rating-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
		                  <input class="rating__input" name="rating" id="rating-2" value="2" type="radio">
		                  <label aria-label="3 stars" class="rating__label" for="rating-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
		                  <input class="rating__input" name="rating" id="rating-3" value="3" type="radio" checked>
		                  <label aria-label="4 stars" class="rating__label" for="rating-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
		                  <input class="rating__input" name="rating" id="rating-4" value="4" type="radio">
		                  <label aria-label="5 stars" class="rating__label" for="rating-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
		                  <input class="rating__input" name="rating" id="rating-5" value="5" type="radio">
		              </div>
		            <p>Green Area</p>
		          </div>          
		        </div>
		        <div id="amenities" class="amenities-main-block">    
		          <h5 class="amenities-heading">Amenities</h5>
		          <hr>
		          <div class="amenities-post">
		            <div class="row">
		              @foreach($property->amenities as $amenity)
					          <div class="col-md-3 col-sm-6">
					            <ul>
					              <li><i class="fa fa-check"></i>{{ $amenity->name }}</li>
					            </ul>
					          </div>
		              @endforeach
		            </div>
		          </div>
		        </div>
		        <div id="floor-plan" class="line-graph">
		          <h5 class="line-graph-heading">Property Price Trand</h5>
		          <hr>
		          <div id="chartContainer" style="height: 370px; width: 100%;"></div>
		        </div>
		        <div id="pichart-graph" class="pichart-graph">
		          <h5 class="line-graph-heading">Locality Price in Cities</h5>
		          <hr>
		          <table id="q-graph">            
		            <tbody>
		            <tr class="qtr" id="q1">
		            <th scope="row">Q1</th>
		            <td class="sent bar" style="height: 111px;"><p>$18,450.00</p></td>
		            <td class="paid bar" style="height: 99px;"><p>$16,500.00</p></td>
		            </tr>
		            <tr class="qtr" id="q2">
		            <th scope="row">Q2</th>
		            <td class="sent bar" style="height: 206px;"><p>$34,340.72</p></td>
		            <td class="paid bar" style="height: 194px;"><p>$32,340.72</p></td>
		            </tr>
		            <tr class="qtr" id="q3">
		            <th scope="row">Q3</th>
		            <td class="sent bar" style="height: 259px;"><p>$43,145.52</p></td>
		            <td class="paid bar" style="height: 193px;"><p>$32,225.52</p></td>
		            </tr>
		            <tr class="qtr" id="q4">
		            <th scope="row">Q4</th>
		            <td class="sent bar" style="height: 110px;"><p>$18,415.96</p></td>
		            <td class="paid bar" style="height: 195px;"><p>$32,425.00</p></td>
		            </tr>
		            <tr class="qtr" id="q5">
		            <th scope="row">Q4</th>
		            <td class="sent bar" style="height: 110px;"><p>$18,415.96</p></td>
		            <td class="paid bar" style="height: 195px;"><p>$32,425.00</p></td>
		            </tr>
		            </tbody>
		            </table>
		            <div id="ticks">
		            <div class="tick" style="height: 59px;"><p>$50,000</p></div>
		            <div class="tick" style="height: 59px;"><p>$40,000</p></div>
		            <div class="tick" style="height: 59px;"><p>$30,000</p></div>
		            <div class="tick" style="height: 59px;"><p>$20,000</p></div>
		            <div class="tick" style="height: 59px;"><p>$10,000</p></div>
		            </div>
		        </div>
		        <div id="floor-plan" class="floor-plan">
		          <h5 class="floor-heading">Floor Plan</h5>
		          <hr>
		          <div class="floor-plan-img">
		            <div class="row popup-gallery">
		             @foreach($property->flore_plans  as $flore_plan)
		             	 <div class="col-md-3 col-xs-6">
			                <a href="" title="Floor Plan"><img src="{{ asset('storage/flore_plan/'.$flore_plan->img) }}" class="img-responsive" alt="floor-plan-1"></a>                
			              </div>
		             @endforeach
		            </div>
		          </div>
		        </div>
		        <div id="video-prop" class="video-listing" style="margin-bottom: 40px;">
		          <iframe style="width: 100%; height: 50vh;"  src="{{ $property->video_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		        </div>
		      </div>      
		    </div>
		  </div>
		</div>      
 	@else
 	<div class="container">
 		<div class="row">
 			<div class="col-md">
 				<div class="text-center"  style="margin-top: 100px; margin-bottom: 200px;">
 					<h1>Property Is not to be Sale !</h1>
 				</div>
 			</div>
 		</div>
 	</div>

 	@endif
		<!--  end property listing -->
<!-- footer -->
@include('partial.footer')
<!--  end footer -->
@endsection