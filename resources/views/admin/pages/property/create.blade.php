@extends('admin/layouts/index')
	@section('page_css')
	<link rel="stylesheet" href="{{asset('admin/modules/datatables/datatables.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset ('admin/modules/izitoast/css/iziToast.min.css') }}">
	<link rel="stylesheet" href="{{asset ('admin/modules/summernote/summernote-bs4.css')}}">
	<link rel="stylesheet" href="{{asset ('admin/modules/jquery-selectric/selectric.css')}}">
	<link rel="stylesheet" href="{{asset ('admin/modules/codemirror/lib/codemirror.css')}}">
	<link rel="stylesheet" href="{{asset ('admin/modules/codemirror/theme/duotone-dark.css')}}">
	<link rel="stylesheet" href="{{asset ('admin/modules/jquery-selectric/selectric.css')}}">
	<link rel="stylesheet" href="//www.codermen.com/css/bootstrap.min.css">  
	<script src=//www.codermen.com/js/jquery.js></script>
	@endsection
@section('main-content')
	<section class="section">
	  <div class="section-header">
	    <h1>Create  Property</h1>
	    <div class="section-header-breadcrumb">
	      <div class="breadcrumb-item active"><a href="#">Property</a></div>             
	      <div class="breadcrumb-item"> Property Management</div>
	      <div class="breadcrumb-item">Create  Property</div>
	    </div>
	  </div>
	  <div class="section-body">
	  	<div class="row">
	  		<div class="col-6">
	  			<h2 class="section-title">Create  Property</h2>
	  		</div>	  		
	  	</div>	   
	  	<div class="main-section">	  		
  			<div class="row">
  				<div class="col-md-12">
	  				<div class="card">
	  					<div class="card-body">  						
	  						<form action="{{ route('property.store') }}" method="post" enctype="multipart/form-data">
	  							@csrf
	  							<div class="row">
	  								<div class="col-md-6">
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
					                <label for="size">Size</label>
					                <input type="text" name="size" class="form-control @error('size') is-invalid @enderror" value="{{ old('size', '') }}">
					                 @error('size')
							              <span class="invalid-feedback" role="alert">
							                <strong>{{ $message }}</strong>
							              </span>
							            @enderror
					              </div>
					              <div class="form-group">
					                <label for="unit">Unit</label>
					                <input type="text" name="unit" class="form-control @error('unit') is-invalid @enderror" value="{{ old('unit', '') }}">
					                 @error('unit')
							              <span class="invalid-feedback" role="alert">
							                <strong>{{ $message }}</strong>
							              </span>
							            @enderror
					              </div>
					              <div class="form-group">
					                <label for="video_url">Video Url</label>					                
					                <input type="url" name="video_url" class="form-control" value="{{ old('video_url', '') }}">					                
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
			              <div class="col-md-6">			              	
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
  </section>
@endsection
{{-- End Main Content --}}


{{-- Page Script --}}
@section('page_scripts')
<script src="{{asset ('admin/modules/izitoast/js/iziToast.min.js') }}"></script>
<script src="{{asset ('admin/js/page/modules-datatables.js')}}"></script>
<script src="{{asset ('admin/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset ('admin/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>

<script>
	$(document).ready(function() {
		@if(session()->has('success'))
		  iziToast.success({
		    title: 'Success!',
		    message: '{{ session()->get('success') }}',
		    position: 'bottomCenter'
		  });
		  @endif	
	});

	$(document).ready(function() {

	  $(".add-more").click(function(){ 
	      var html = $(".copy").html();
	      $(".after-add-more").after(html);
	  });


	  $("body").on("click",".remove",function(){ 
	      $(this).parents(".control-group").remove();
	  });
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
	    var maxFieldLimit = 10; //Input fields increment limitation
	    var add_more_button = $('.add_button'); //Add button selector
	    var Fieldwrapper = $('.input_field_wrapper'); //Input field wrapper
	    var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" style="padding:0px 10px;" title="Remove field">Remove</a></div>'; //New input field html 
	    var x = 1; //Initial field counter is 1
	    $(add_more_button).click(function(){ //Once add button is clicked
	        if(x < maxFieldLimit){ //Check maximum number of input fields
	            x++; //Increment field counter
	            $(Fieldwrapper).append(fieldHTML); // Add field html
	        }
	    });
	    $(Fieldwrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
	        e.preventDefault();
	        $(this).parent('div').remove(); //Remove field html
	        x--; //Decrement field counter
	    });
	});
</script>
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