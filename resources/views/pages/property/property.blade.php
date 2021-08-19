@extends('layouts/index')
@section('title', 'HOME')
@section('contents')
<!--  top bar -->

<!--  end top bar -->
<!--  navigation -->
 @include('partial.header')
<!--  end navigation -->
        <!--  heritage -->
  <div id="heritage" class="heritage-main-block">
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <div class="heritage-text">
            <h3>Property in Gurgaon</h3>
            <p>Showing 1 - 24 Projects out of 1347</p>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="heritage-btn dropdown"> <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Shortlist</a>
            <ul class="dropdown-menu multi-level">
              <li><a href="#">Price Low To High</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Price High To Low</a></li>
              <li role="separator" class="divider"></li>
            </ul>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </div>
  <!--  end heritage -->
  <!--   property listing -->
  <div id="property-listing" class="property-listing-main-block">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          @foreach($properties as $property)
            <div id="overview" class="overview">
              <div class="card-table">
                <div class='titleBox'>
                  <a href="#"><img class="stretched-link" src="{{ asset('storage/gallery/thumb/'.$property->gallery[0]->g_thumb) }}"  height="200" width="200" alt=""></a>
                  <div class="about-property">
                    <h6>{{ $property->title }}</h6>
                    <p>{{ $property->address->ad_line_1 }}, {{ $property->address->ad_line_2 }}, {{ $property->address->city->name }}</p>
                    <h5>{{ $property->price_unit }}{{ $property->min_price }} - {{ $property->price_unit }}{{ $property->max_price }}</h5>
                  </div>
                </div>                
                <div class="property-box">
                  <ul class="tableHead">
                    <li>Unit</li>
                    <li>Size</li>
                    <li>Price</li>
                  </ul>
                  <div class="table-body">
                    <ul>
                      <li><a href="#" class="stretched-link"><span itemprop="name">{{ $property->unit }}</span></a>
                      </li>
                      <li>{{ $property->size }}</li>
                      <li>{{ $property->price_unit }}{{ $property->min_price }} - {{ $property->price_unit }}{{ $property->max_price }}</li>
                    </ul>                  
                  </div>
                  <div class="btnBox">
                    <p class="price">Enjoy Downtown Lifestyle</p>
                    <div class="ctaBtn">
                      <a href="{{ route('property.detail', [$property->id])  }}" class="btn btn-default">Details</a>
                      <a href="{{ route('contact')}}" class="btn btn-default">Get a Call back</a>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!--  end property listing -->
<!-- footer -->
@include('partial.footer')
<!--  end footer -->
@endsection
