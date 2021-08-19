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
@endsection
@section('main-content')
  <section class="section">
    <div class="section-header">
      <h1>Update Post</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Post</a></div>             
        <div class="breadcrumb-item">Post Management</div>
        <div class="breadcrumb-item">Update Post</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-6">
          <h2 class="section-title">Update Post</h2>
        </div>        
      </div>      
      <div class="main-section">        
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                  <div class="form-group">
                    <input type="hidden" name="user_id" value="{{ $post->user_id }}">                        
                  </div>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title ) }}">
                    @error('title')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="category_img">
                      <label class="custom-file-label" for="category_img">Choose file</label>
                       @error('image')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <img src="{{ asset('storage/post_image/'.$post->image) }}" class="img-responsive" height="100" width="100" alt="">
                  <div class="form-group">
                    <label for="section-title">Select Category</label>
                    <select name="categories[]" class="form-control selectric" multiple data-live-search="true">
                      @foreach($categories as $category)
                        <option value="{{$category->id}}" {{ $post->categories->where('id', $category->id)->first() != null ? 'selected' : '' }}>{{ $category->name }}</option>                       
                      @endforeach                     
                    </select>                 
                  </div>
                  <div class="form-group">
                    <label for="name">Description</label>
                    <textarea name="body" id="body" class=" @error('body') is-invalid @enderror" rows="10" cols="100">{!! $post->body  !!}</textarea>
                     @error('body')
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
<script src="{{asset ('admin/modules/izitoast/js/iziToast.min.js') }}"></script>
<script src="{{asset ('admin/js/page/modules-datatables.js')}}"></script>
<script src="{{asset ('admin/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset ('admin/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
@endsection
{{-- End Page Script --}}