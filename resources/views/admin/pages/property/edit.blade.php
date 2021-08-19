@extends('admin/layouts/index')
@section('page_css')
<link rel="stylesheet" href="{{asset('admin/assets/modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset ('admin/assets/modules/izitoast/css/iziToast.min.css') }}">
<link rel="stylesheet" href="{{asset ('admin/assets/modules/summernote/summernote-bs4.css')}}">


@endsection

@section('main-content')
  <section class="section">
    <div class="section-header">
      <h1>Update Property</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Property</a></div>             
        <div class="breadcrumb-item">Property Management</div>
        <div class="breadcrumb-item">Update Property</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-6">
          <h2 class="section-title">Update Property</h2>
        </div>        
      </div>      
      <div class="main-section">        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">               
                <form action="{{ route('property.update', $property->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')                  
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ $property->title }}" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $property->title ) }}">
                        @error('title')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>                                                            
                      <div class="form-group">
                        <label for="min_price">Min Price</label>
                        <input type="text" name="min_price" value="{{ $property->min_price }}" class="form-control @error('min_price') is-invalid @enderror" value="{{ old('min_price', $property->min_price ) }}">
                        @error('min_price')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="max_price">Max Price</label>
                        <input type="text" name="max_price" value="{{ $property->max_price }}" class="form-control @error('max_price') is-invalid @enderror" value="{{ old('max_price', $property->max_price ) }}">
                        @error('max_price')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="size">Max Price</label>
                        <input type="text" name="size" value="{{ $property->size }}" class="form-control @error('size') is-invalid @enderror" value="{{ old('size', $property->size ) }}">
                        @error('size')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="unit">Max Price</label>
                        <input type="text" name="unit" value="{{ $property->unit }}" class="form-control @error('unit') is-invalid @enderror" value="{{ old('unit', $property->unit ) }}">
                        @error('unit')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="details">Details</label>
                        <textarea name="details" id="details" class="form-control @error('details') is-invalid @enderror" cols="30" rows="10">{{ old('details', $property->details) }}</textarea>
                        @error('details')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="list_details">List Details</label>
                        <textarea name="list_details" id="list_details" class="form-control @error('list_details') is-invalid @enderror" cols="30" rows="10">{{ old('list_details', $property->list_details) }}</textarea>
                        @error('list_details')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="price_unit">price Unit</label>
                        <input type="text" name="price_unit" value="{{ $property->price_unit }}" class="form-control @error('price_unit') is-invalid @enderror" value="{{ old('price_unit', $property->price_unit ) }}">
                        @error('price_unit')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="video_url">Video Url</label>
                        <input type="text" name="video_url" value="{{ $property->video_url }}" class="form-control @error('video_url') is-invalid @enderror" value="{{ old('video_url', $property->video_url ) }}">
                        @error('video_url')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="text mb-3">Flore Plan</div>
                      <div class="form-group">
                        <div class="custom-file">
                          <input type="file" name="img[]" class="custom-file-input" id="customFile"  multiple>
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                      <div class="row">
                        @foreach($property->flore_plans as $key => $flore_image )                  
                            <a href="" class="img-wrap" style="padding: 10px;">
                              <img src="{{ asset('storage/flore_plan/'.$flore_image->img) }}" class="img-responsive" height="100" width="100" alt="">
                            </a>
                        @endforeach
                      </div>
                      <div class="text mb-3">Gallery</div>
                      <div class="form-group">
                        <div class="custom-file">
                          <input type="file" name="g_img[]" class="custom-file-input" id="gallery" multiple>
                          <label class="custom-file-label" for="gallery">Choose file</label>
                        </div>
                      </div>
                      <div class="row">
                        @foreach($property->gallery as $key => $gallery_image )                  
                            <a href="" class="img-wrap" style="padding: 10px;">
                              <img src="{{ asset('storage/gallery/'.$gallery_image->g_img) }}" class="img-responsive" height="100" width="100" alt="">
                            </a>
                        @endforeach
                      </div>                      
                    </div>
                    <div class="col-md-6">
                      <div class="text mb-3">Property Address</div>
                      <div class="form-group">
                        <label for="ad_line_1">Address Line 1</label>
                        <input type="text" name="ad_line_1" value="{{ $property->address->ad_line_1 }}" class="form-control @error('ad_line_1') is-invalid @enderror" value="{{ old('ad_line_1', $property->address->ad_line_1) }}">
                        @error('ad_line_1')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="ad_line_2">Address Line 2</label>
                        <input type="text" name="ad_line_2" value="{{ $property->address->ad_line_2 }}" class="form-control @error('ad_line_2') is-invalid @enderror" value="{{ old('ad_line_2', $property->address->ad_line_2) }}">
                        @error('ad_line_2')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror                 
                      </div>
                      <div class="form-group">
                        <label for="section-title">Select Country</label>
                        <select id="country" name="country_id" class="form-control @error('country_id') is-invalid @enderror">
                          @foreach($countries  as $country)                     
                            <option value="{{$country->id}}" {{ $property->address->country_id == $country->id ? 'selected' : '' }} >{{ $country->name }}</option>
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
                          @foreach($states->where('country_id', $property->address->country_id) as $state)                         
                            <option value="{{$state->id}}" {{ $property->address->state_id == $state->id ? 'selected' : '' }}>{{ $state->name }}</option>
                          @endforeach
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
                           @foreach($cities->where('state_id', $property->address->state_id) as $city)                         
                            <option value="{{$city->id}}" {{ $property->address->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                          @endforeach
                        </select>
                        @error('city_id')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="land_mark">Land Mark</label>
                        <input type="text" name="land_mark" value="{{ $property->address->land_mark }}" class="form-control @error('land_mark') is-invalid @enderror" value="{{ old('land_mark', $property->address->land_mark) }}">
                         @error('land_mark')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror                  
                      </div>
                      <div class="form-group">
                        <label for="pin_code">Pin Code</label>
                        <input type="text" name="pin_code" value="{{ $property->address->pin_code }}" class="form-control @error('pin_code') is-invalid @enderror" value="{{ old('pin_code', $property->address->pin_code) }}">
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
                                <input name="amenities[]" type="checkbox" value="{{ $amenity->id }}" {{ $property->amenities->where('id', $amenity->id)->first() != null ? 'checked' : '' }} class="colorinput-input">
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
                      <button type="sibmit" class="btn btn-lg btn-primary" >Update</button>
                    </div>
                </form>
              </div>
            </div>            
          </div>            
        </div>        
      </div>           
    </div>         
  </section>
@endsection
{{-- End Main Content --}}


{{-- Page Script --}}
@section('page_scripts')
<script src="{{asset ('admin/assets/modules/izitoast/js/iziToast
.min.js') }}"></script>
{{-- <script src="{{asset ('admin/assets/js/page/bootstrap-modal.js') }}"></script> --}}
<script src="{{asset('admin/assets/js/page/modules-toastr.js')}}"></script>

<script src="{{asset('admin/assets/js/page/modules-datatables.js')}}"></script>
<script src="{{asset ('admin/assets/modules/summernote/summernote-bs4.js')}}"></script>
<script type=text/javascript>
  $('#country').change(function(){
  var countryID = $(this).val();  
  if(countryID){
    $.ajax({
      type:"GET",
      url:"{{url('get-state-list')}}?country_id="+countryID,
      success:function(res){        
      if(res){
        $("#state").empty();
        $("#state").append('<option>Select</option>');
        $.each(res,function(key,value){
          $("#state").append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $("#state").empty();
      }
      }
    });
  }else{
    $("#state").empty();
    $("#city").empty();
  }   
  });
  $('#state').on('change',function(){
  var stateID = $(this).val();  
  if(stateID){
    $.ajax({
      type:"GET",
      url:"{{url('get-city-list')}}?state_id="+stateID,
      success:function(res){        
      if(res){
        $("#city").empty();
        $.each(res,function(key,value){
          $("#city").append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $("#city").empty();
      }
      }
    });
  }else{
    $("#city").empty();
  }
    
  });
</script>

@endsection
{{-- End Page Script --}}