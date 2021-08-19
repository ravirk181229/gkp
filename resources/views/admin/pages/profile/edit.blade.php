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
	      <h1>Profile</h1>
	      <div class="section-header-breadcrumb">
	        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
	        <div class="breadcrumb-item">Profile</div>
	      </div>
	    </div>
	    <div class="section-body">
	    	<div class="row mt-sm-4">              
	        <div class="col-12 col-md-12 col-lg-7">
	          <div class="card">
	             <div class="card-body">
				         <form action="{{ route('profile.update', [$user]) }}" method="post">
					          @csrf
					          @method('PATCH')	           
				          <div class="form-group">
				            <label for="name">Name</label>
				            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}">
			          		 @error('name')
		                  <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                  </span>
		                @enderror
				          </div>
				          <div class="form-group">
				            <label for="email">Email</label>
				            <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}">
				            @error('email')
		                  <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                  </span>
		                @enderror			           
				          </div>
				          <div class="form-group">
				            <label for="phone">phone</label>
				            <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $user->phone) }}">
				            @error('phone')
		                  <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                  </span>
		                @enderror		
				          </div>				          
				           <div class="card-footer text-right">
			                <button type="submit" class="btn btn-primary">Save Changes</button>
			              </div>
				         </form>
				        </div>	              
	            </form>
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>
	@endsection
@section('page_scripts')
<script src="{{asset ('admin/modules/izitoast/js/iziToast.min.js') }}"></script>
<script src="{{asset ('admin/js/page/modules-datatables.js')}}"></script>
<script src="{{asset ('admin/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset ('admin/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
<script>
		$(document).ready(function () {
			@if(session()->has('success'))
			  iziToast.success({
			    title: 'Success!',
			    message: '{{ session()->get('success') }}',
			    position: 'bottomCenter'
			  });		  	
		  @elseif(session()->has('info'))
		    iziToast.info({
			    title: 'Info!',
			    message: '{{ session()->get('info') }}',
			    position: 'bottomCenter'
			  });
			@elseif(session()->has('warning'))
				iziToast.warning({
					title: 'Delete!',
					message: '{{ session()->get('warning') }}',
					position: 'bottomCenter'
				});  			
		  @endif
		});
	</script>
@endsection