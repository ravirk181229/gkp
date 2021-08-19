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
      <h1>Update Country</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Country</a></div>             
        <div class="breadcrumb-item">Country Management</div>
        <div class="breadcrumb-item">Update Country</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-6">
          <h2 class="section-title">Update country</h2>
        </div>        
      </div>      
      <div class="main-section">        
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">               
                <form action="{{ route('country.update', $country->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')                                 
                  <div class="form-group">
                    <label for="sortname">Name <span>*</span> </label>
                    <input type="text" name="sortname" value="{{ $country->sortname }}" class="form-control @error('sortname') is-invalid @enderror" value="{{ old('sortname', $country->sortname ) }}">
                     @error('sortname')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror    
                  </div>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $country->name }}" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $country->name ) }}">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="phonecode">Name</label>
                    <input type="number" name="phonecode" value="{{ $country->phonecode }}" class="form-control @error('phonecode') is-invalid @enderror" value="{{ old('phonecode', $country->phonecode ) }}">
                    @error('phonecode')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
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
<script src="{{asset ('admin/assets/modules/izitoast/js/iziToast.min.js') }}"></script>
{{-- <script src="{{asset ('admin/assets/js/page/bootstrap-modal.js') }}"></script> --}}
<script src="{{asset('admin/assets/js/page/modules-toastr.js')}}"></script>

<script src="{{asset('admin/assets/js/page/modules-datatables.js')}}"></script>
<script src="{{asset ('admin/assets/modules/summernote/summernote-bs4.js')}}"></script>


@endsection
{{-- End Page Script --}}