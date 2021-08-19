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
				         <form class="contact-form" method="POST" action="{{ Route('admin.update.password') }}" aria-label="{{ __('Reset Password') }}">
		            		@csrf              
		                <div class="form-group row">
				              <label for="oldpass" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>
				              <div class="col-md-6">
				                <input id="oldpass" type="password" class="form-control{{ $errors->has('oldpass') ? ' is-invalid' : '' }}" name="oldpass" value="{{ $oldpass ?? old('oldpass') }}" required autofocus>
				                @if ($errors->has('oldpass'))
				                <span class="invalid-feedback" role="alert">
				                  <strong>{{ $errors->first('oldpass') }}</strong>
				                </span>
				                @endif
				              </div>
				            </div>
				            <div class="form-group row">
				              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>
				              <div class="col-md-6">
				                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
				                @if ($errors->has('password'))
				                <span class="invalid-feedback" role="alert">
				                  <strong>{{ $errors->first('password') }}</strong>
				                </span>
				                @endif
				              </div>
				            </div>
				            <div class="form-group row">
				              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
				              <div class="col-md-6">
				                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
				              </div>
				            </div>
				            <div class="form-group row mb-0">
				              <div class="col-md-10 col-form-label text-md-right">
				                <button type="submit" class="btn btn-primary" style="float: right;">
				                {{ __('Reset Password') }}
				                </button>
				              </div>
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