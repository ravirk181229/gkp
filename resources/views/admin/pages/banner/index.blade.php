@extends('admin/layouts/index')
	@section('page_css')
		<link rel="stylesheet" href="{{asset('admin/modules/datatables/datatables.min.css')}}">
		<link rel="stylesheet" href="{{asset('admin/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
		<link rel="stylesheet" href="{{asset('admin/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
	@endsection

	@section('main-content')
		<section class="section">
		  <div class="section-header">
		    <h1>Banner Video Management</h1>
		    <div class="section-header-breadcrumb">
		      <div class="breadcrumb-item active"><a href="#">Banner Video</a></div>             
		      <div class="breadcrumb-item">Banner Video Management</div>
		    </div>
		  </div>
		  <div class="section-body">
		  	<div class="row">
		  		<div class="col-6">
		  			<h2 class="section-title">All Banner Video Data</h2>
		  		</div>
		  		<div class="col-6">
		  			<div class="float-right">
		  				<a href="{{ route('banner.create') }}" class="btn btn-primary">CREATE AMENITY</a>
		  			</div>
		  		</div>
		  	</div>				 
		  	<div class="main-section">
		  		<div class="card table-responsive">
		  			<div class="card-body">
		  				<table class="table" id="table-1">
		  					<thead>		  					
		  						<tr>
		  							<th>#</th>
		  							<th>Banner video</th>
		  							<th>Action</th>
		  						</tr>
		  					</thead>
		  					<tbody>
		  					@foreach($banners as $key => $banner)
		  						<tr>
		  							<td>{{ $key+1 }}</td>		
		  							<td>{{ $banner->video_url }}</td>
		  							<td>
		  								<div class="btn-group">
		  									<a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-info btn-md"><i class="fas fa-pencil-alt"></i></a>	
		  									<a href="javascript:;" data-toggle="modal" onclick="deleteData({{ $banner->id }})" data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
		  								</div>
		  							</td>
		  						</tr>
		  						@endforeach
		  					</tbody>
		  				</table>
		  			</div>	  			
		  		</div>
		  	</div>           
		  </div>         
	  </section>
	  <!-- Modal -->
<div class="modal fade"   id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Realy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="deleteForm" method="post">
        @csrf
        @method('DELETE')			
	      <div class="modal-body">
	      <p>Do you want to delete!</p>													       
	      </div>
		    <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
	      </div>
    	</form>	  
  	</div>
	</div>
</div>			

{{-- End Modal --}}
	
	@endsection
	
	@section('page_scripts')
	<script src="{{asset('admin/modules/izitoast/js/iziToast.min.js')}}"></script>
	<script src="{{asset('admin/js/page/modules-datatables.js')}}"></script>
	<script type="text/javascript">
	   function deleteData(id)
	   {
	       var id = id;
	       var url = '{{ route("banner.destroy", ":id") }}';
	       url = url.replace(':id', id);
	       $("#deleteForm").attr('action', url);
	   }

	   function formSubmit()
	   {
	       $("#deleteForm").submit();
	   }
	</script>
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