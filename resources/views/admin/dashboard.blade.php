@extends('admin/layouts/index')
@section('title', 'DASHBOARD')
@section('main-content')

	<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total User</h4>
            </div>
            <div class="card-body">
              {{ $users->count()-1 }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Post</h4>
            </div>
            <div class="card-body">
              {{ $posts->count() }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Property</h4>
            </div>
            <div class="card-body">
              {{ $properties->count() }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Varified Property</h4>
            </div>
            <div class="card-body">            
            	{{ $properties->where('is_varified', 1)->count() }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Not Varified Property</h4>
            </div>
            <div class="card-body">            
            	{{ $properties->where('is_varified', 0)->count() }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Property For Sale</h4>
            </div>
            <div class="card-body">
              {{ $properties->where('is_sold', 0)->count() }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Sold Property</h4>
            </div>
            <div class="card-body">
              {{ $properties->where('is_sold', 1)->count() }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    	<div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Users</h4>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped mb-0">
                <thead>
                  <tr>
                    <th>S No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>                         
                  @foreach($users as $key => $user)
                  	<tr>
	                    <td>{{ $key+1 }}</td>
	                    <td>
	                      <a href="#" class="font-weight-600"><img src="{{ asset('admin/img/avatar/avatar-1.png') }}" alt="avatar" width="30" class="rounded-circle mr-1"> {{ $user->name }}</a>
	                    </td>
	                    <td>{{ $user->email }}</td>
	                    <td>{{ $user->phone }}</td>
	                    <td>
	                      <a href="javascript:;" data-toggle="modal" onclick="deleteData({{ $user->id }})" data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
	                    </td>
	                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
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
<script type="text/javascript">
   function deleteData(id)
   {
       var id = id;
       var url = '{{ route("user.destroy", ":id") }}';
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