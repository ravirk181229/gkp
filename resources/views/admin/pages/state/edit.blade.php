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
      <h1>Update State</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">State</a></div>             
        <div class="breadcrumb-item">State Management</div>
        <div class="breadcrumb-item">Update State</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-6">
          <h2 class="section-title">Update State</h2>
        </div>        
      </div>      
      <div class="main-section">        
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">               
                <form action="{{ route('state.update', $state->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')                                 
                  <div class="form-group">
                    <input type="hidden" name="country_id" class="form-control" value="">                        
                  </div>    
                  <div class="form-group">
                    <label for="section-title">Select Country</label>
                    <select name="country_id" class="form-control selectric">
                      @foreach($countries as $country)
                        <option value="{{$country->id}}">{{ $country->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $state->name }}" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $state->name ) }}">
                    @error('name')
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
<script src="{{asset ('admin/assets/modules/izitoast/js/iziToast
.min.js') }}"></script>
{{-- <script src="{{asset ('admin/assets/js/page/bootstrap-modal.js') }}"></script> --}}
<script src="{{asset('admin/assets/js/page/modules-toastr.js')}}"></script>

<script src="{{asset('admin/assets/js/page/modules-datatables.js')}}"></script>
<script src="{{asset ('admin/assets/modules/summernote/summernote-bs4.js')}}"></script>


@endsection
{{-- End Page Script --}}