<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>GHAR KA PATTA | ADMIN |  @yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('admin/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/modules/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{asset ('admin/modules/izitoast/css/iziToast.min.css') }}">

  <!-- CSS Libraries -->
<!--  -->
 @section('page_css')

    @show
  

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>

<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg" style="height: 76px;"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            
          </div>
        </form>
        <ul class="navbar-nav navbar-right">       
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block" style="font-size: 20px;">{{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">              
              <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>              
              <a href="{{ route('admin.changepassword') }}" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>        
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <!-- Start Navigation bar -->
        @include('../admin.includes.navigation')
        <!-- End Navigation bar -->        
      </div>
      <!-- Main Content -->
      <div class="main-content">
        @section('main-content')
        @show        
      </div>
      @include('admin/includes/footer')      
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('admin/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/modules/popper.js') }}"></script>
  <script src="{{ asset('admin/modules/tooltip.js') }}"></script>
  <script src="{{ asset('admin/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('admin/modules/moment.min.js') }}"></script>
  <script src="{{ asset('admin/js/stisla.js') }}"></script>

  <script src="{{asset('admin/modules/datatables/datatables.min.js')}}"></script>
  <script src="{{asset('admin/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
  <script src="{{asset('admin/modules/jquery-ui/jquery-ui.min.js')}}"></script>

  
  <!-- JS Libraies -->
  <script src="{{ asset('admin/modules/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('admin/modules/chart.min.js') }}"></script>
  <script src="{{ asset('admin/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('admin/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('admin/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Page Specific JS File -->
  {{-- <script src="{{ asset('admin/js/page/index.js') }}"></script> --}}
  @section('page_scripts')

       @show
  
  <!-- Template JS File -->
  <script src="{{ asset('admin/js/scripts.js') }}"></script>
  <script src="{{ asset('admin/js/custom.js') }}"></script>
    
</body>
</html>