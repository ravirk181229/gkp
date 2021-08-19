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
	{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> --}}
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}

	@endsection
@section('main-content')
	<section class="section">
	  <div class="section-header">
	    <h1>Create  Banner</h1>
	    <div class="section-header-breadcrumb">
	      <div class="breadcrumb-item active"><a href="#">Banner</a></div>             
	      <div class="breadcrumb-item"> Banner Management</div>
	      <div class="breadcrumb-item">Create  Banner</div>
	    </div>
	  </div>
	  <div class="section-body">
	  	<div class="row">
	  		<div class="col-6">
	  			<h2 class="section-title">Create  Banner</h2>
	  		</div>	  		
	  	</div>	   
	  	<div class="main-section">	  		
  			<div class="row">
  				<div class="col-md-6">
	  				<div class="card">
	  					<div class="card-body">  						
	  						<form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
	  							@csrf
	  							<div>
			              <div class="control-group after-add-more">				              
				               <div class="form-group">
					                <label for="video_url">Video Url</label>					                
					                <input type="url" name="video_url" class="form-control @error('video_url') is-invalid @enderror" value="{{ old('video_url', '') }}">					                
					                 @error('video_url')
							              <span class="invalid-feedback" role="alert">
							                <strong>{{ $message }}</strong>
							              </span>
							            @enderror
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

@endsection
{{-- End Page Script --}}