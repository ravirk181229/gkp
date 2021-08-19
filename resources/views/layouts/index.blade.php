<!DOCTYPE html>
<html lang="en">
<head>
<title>GHAR KA PATTA | @yield('title')</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="EX Properties" />
<meta name="keywords" content="EX Properties, html template, real estate template">
<meta name="author" content="PopoThemes" />
<meta name="MobileOptimized" content="320" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/icon" href="images/favicon/favicon.ico"> <!-- favicon-icon -->
<!-- theme style -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet"> <!-- google font -->
<link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet" type="text/css"/> <!-- swiper slider css -->
<link rel='stylesheet prefetch' href='{{ asset('assets/css/coverflow.css') }}'> <!-- coverflow slider css -->
<link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->

 @section('page_css')

    @show
<link rel="stylesheet" href="{{ asset('admin/modules/izitoast/css/iziToast.min.css') }}">

<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"/> <!-- custom css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css">
<!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader --> 
  <div class="preloader">
    <div class="status">
      <div class="status-message">
      </div>
    </div>
  </div>
<!-- end preloader --> 


  @yield('contents')

<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script> <!-- jquery library js -->
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script> <!-- bootstrap js -->
<script type="text/javascript" src="{{ asset('assets/js/swiper.min.js') }}"></script> <!-- swiper slider js -->
<script type="text/javascript" src="{{ asset('assets/js/coverflow.min.js') }}"></script> <!-- coverflow slider js -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script> <!-- magnify popup js -->
<script type="text/javascript" src="{{ asset('assets/js/smooth-scroll.js') }}"></script> <!-- smooth scroll js -->  
<script type="text/javascript" src="{{ asset('assets/js/jquery.ajaxchimp.js') }}"></script> <!-- mail chimp js --> 
<script type="text/javascript" src="{{ asset('assets/js/waypoints.min.js') }}"></script> <!-- facts count js Required for jquery.counterup.js 

file -->
<script type=text/javascript>
  $('#country').change(function(){
  var countryID = $(this).val();  
  if(countryID){
    $.ajax({
      type:"GET",
      url:"{{url('get-state-list')}}?country_id="+countryID,
      success:function(res){        
      if(res){
        $("#state").empty();
        $("#state").append('<option>Select</option>');
        $.each(res,function(key,value){
          $("#state").append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $("#state").empty();
      }
      }
    });
  }else{
    $("#state").empty();
    $("#city").empty();
  }   
  });
  $('#state').on('change',function(){
  var stateID = $(this).val();  
  if(stateID){
    $.ajax({
      type:"GET",
      url:"{{url('get-city-list')}}?state_id="+stateID,
      success:function(res){        
      if(res){
        $("#city").empty();
        $.each(res,function(key,value){
          $("#city").append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $("#city").empty();
      }
      }
    });
  }else{
    $("#city").empty();
  }
    
  });
</script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.counterup.js') }}"></script> <!-- facts count js-->
<script type="text/javascript" src="{{ asset('assets/js/theme.js') }}"></script> <!-- custom js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/intlTelInput.js"></script>
<script>
  $(".tel-phone").intlTelInput({
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.5/js/utils.js"
  });
</script>
  @section('page_scripts')

       @show

<script src="{{asset ('admin/modules/izitoast/js/iziToast.min.js') }}"></script>
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

<!-- end jquery -->
</body>
<!--body end -->
</html>