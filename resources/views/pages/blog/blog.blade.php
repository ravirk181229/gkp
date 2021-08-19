@extends('layouts/index')
@section('title', 'BLOG')


@section('page_css')
  <link rel="stylesheet" href="{{ asset('admin/modules/summernote/summernote-bs4.css')}}">
@endsection
@section('contents')
<!--  top bar -->

<!--  end top bar -->
<!--  navigation -->
 @include('partial.header')
<!--  end navigation -->

<!--  page banner -->
  <div id="page-banner" class="page-banner-main" style="background-image: url('{{ asset('assets/images/homebanner.jpg') }}')">
    <div class="overlay-bg"></div>    
      <div class="page-banner-text text-center">
        <h3 class="page-baner-hedding">Blog</h3>  
        <ol class="breadcrumb">
          <li><a href="{{ route('index') }}">Home</a></li>
          <li class="active">Blog</li>
        </ol>     
      </div> 
  </div>
<!--  end page banner -->
<!-- blog left -->    
  <div id="blog-left" class="blog-left-main-block">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <div class="archives-widget">
            <h6>Categories</h6>
            <div class="services-content">
              <ul>
                @foreach($categories as $category)
                  <li>                    
                    <a href="#"><img src="{{ asset('storage/category_image/'.$category->image) }}" alt="Snow" style="height: 110px;"> 
                      <div style="font-size: 20px;">{{ $category->name }}</div>
                    </a>
                  </li>
                @endforeach
              </ul>
              {{-- {{  dd($posts->title) }} --}}
            </div>
          </div>          
          @foreach($posts->take(5) as $post)
            <div class="featured-properties-block">
            <h5 class="featured-heading">Top Posts</h5>
            <div class="featured-property-dtl">
              <div class="featured-photo">
                <a href="#"><img src="{{ asset('storage/post_image/'.$post->image) }}" class="img-responsive" width="100px" style="height: 100px;" alt="property-1"></a>
              </div> 
              <div class="featured-dtl">
                <a href="#"><h6>{{ $post->title }}</h6></a>
                <p>{{ $post->created_at->diffForHumans() }}</p>
              </div>
            </div>            
          </div>
          @endforeach
        </div>
        @foreach($posts as $post)
          <div class="col-md-4 col-sm-4">
            <div class="blog-block-page">
              <div class="blog-banner-img">
                <img src="{{ asset('storage/post_image/'.$post->image) }}" class="img-responsive" alt="blog-1">
              </div> 
              <div class="blog-page-heading">
                <ul class="meta-tag">
                  <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans() }}</li>
                  <li><i class="fa fa-user"></i> <a href="#">{{ $post->user->name }}</a></li>
                  <li><i class="fa fa-comment"></i> Comments: <a href="#">10</a></li>
                </ul>
                <a href="{{ route('single_blog', $post->id) }}"><h5 class="blog-title">{{ $post->title }}</h5></a> 
              </div>       
              <p>{!! Str::limit ($post->body, 200) !!}</p>  
              <a href="{{ route('single_blog', $post->id) }}" class="btn btn-default">Read More</a>
            </div>   
          </div>
        @endforeach
      </div>
        <div class="row">
          <div class="col-sm-4 col-md-offset-6">
            {{ $posts->links() }}
          </div>
        </div>
    </div>
  </div>
<!--  end blog details -->


<!-- footer -->
@include('partial.footer')
<!--  end footer -->

@section('page_scripts')
  <script src="{{ asset('admin/modules/summernote/summernote-bs4.js') }}"></script>
@endsection
@endsection
