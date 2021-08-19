@extends('layouts/index')
@section('title', 'SINGLE BLOG')
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
          <li><a href="{{ route('property.show') }}">Home</a></li>
          <li class="active">Blog</li>
        </ol>     
      </div> 
  </div>
<!--  end page banner -->
<!-- blog left -->    
  <div id="blog-left" class="blog-single-main-block">
    <div class="container">
      <div class="row">        
        <div class="col-md-9 col-sm-8">
           <div class="blog-block-page">
            <div class="blog-banner-img">
              <img src="{{ asset('storage/post_image/'.$post->image) }}" class="img-responsive" alt="blog-1">
            </div>             
            <div class="blog-page-heading">
              <ul class="meta-tag">
                <li><i class="fa fa-clock-o"></i> {{ $post->created_at->diffForHumans() }}</li>
                <li><i class="fa fa-user"></i> <a href="#">{{ $post->user->name }}</a></li>               
                <li><i class="fa fa-comment"></i> Comments: <a href="#">{{ $post->comments->count() }}</a></li>
              </ul>
              <h5 class="blog-title">{{ $post->title }}</h5>
            </div>          
            <p>{!! $post->body !!}</p>    
            
          </div>
          <div class="blog-comment">
              <h6 class="comments-heading">Comments</h6>
              <div class="media"> 
                @foreach($post->comments as $comment)
                  <div class="row">
                    <div class="col-xs-10">                     
                      <div class="media-left">
                        <a href="#"><img src="{{ asset('assets/images/default.png') }}" width="30px" class="media-object" alt="comment-clent"></a>
                      </div>                               
                      <div class="media-body">
                        <h6 class="media-heading">{{ $comment->user->name }}- <span>posted-{{ $comment->created_at->diffForHumans() }}</span></h6>
                        <p>{{ $comment->body }}</p>
                      </div> 
                    </div>                  
                  </div>
                @endforeach
              </div>             
            </div>           
            <div class="blog-comment-send">
              <h6 class="comments-heading">Send Comments</h6>
              @guest
              <div class="comment-note"><p>Fill out all required fields to send a message. You have to login to your  account to post any comment.
                <a href="{{ route('login') }}">Login</a></p>
              </div>
              @else
              <div class="row">
                <div class="col-sm-12">
                  <form class="contact-form" method="post" action="{{ route('comment.add') }}">
                    @csrf
                    <div class="form-group">
                      <input type="hidden" name="post_id" value="{{ $post->id }}"/>
                    </div>                
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="name-box" placeholder="Enter Your Name">
                     @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="email-box" placeholder="Enter Your Email">
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Message</label>            
                      <textarea name="comment_body" class="@error('comment_body') is-invalid @enderror" id="message-box" placeholder="Enter Your Message"></textarea>
                      @error('comment_body')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                  </form>
                </div>
              </div>
              @endguest
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
          <div class="tab-widget">
            <h6>Top Category</h6>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="recent-post">
                @foreach($categories as $category)
                  <div class="tab-widget-dtl">
                    <div class="tab-thumb">
                      <img src="{{ asset('storage/category_image/'.$category->image) }}" class="img-responsive" alt="post-thumb-1">
                    </div>
                    <a href="{{ route('single_blog', $post->id) }}"><h5 class="blog-title">{{ $post->title }}</h5></a> 
                    <a href="#">{{ $category->created_at->diffForHumans() }}</a>
                  </div>
                  <hr>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end blog details -->


<!-- footer -->
@include('partial.footer')
<!--  end footer -->
@endsection
