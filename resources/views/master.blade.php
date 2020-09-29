<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Icon -->
  <link rel="icon" href="{{asset('images/logo-fix.gif')}}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin')}}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/toastr/toastr.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  @yield('header')
</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary elevation-2" style="border-bottom: none;">
    <div class="container">
      <a href="/" class="navbar-brand">
        <img src="{{asset('images/logo-fix.jpg')}}" alt="Arlamas Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Armada Laju Mas</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>     

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Perusahaan navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a id="dropdownPerusahaan" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Perusahaan</a>
            <ul aria-labelledby="dropdownPerusahaan" class="dropdown-menu border-0 shadow">
              <li><a href="/tentang" class="dropdown-item">Tentang Kami</a></li>
              <li><a href="/hubungi" class="dropdown-item">Hubungi Kami</a></li>
              <li class="dropdown-divider"></li>
              <li><a href="/gallery" class="dropdown-item">Gallery</a></li>
              <li><a href="/brosur" class="dropdown-item">Download Brosur</a></li>
            </ul>
          </li>        
        </ul>
        <!-- Service navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a id="dropdownService" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Service</a>
            <ul aria-labelledby="dropdownService" class="dropdown-menu border-0 shadow">
              <li><a href="/darat" class="dropdown-item">Kargo Darat</a></li>
              <li><a href="/laut" class="dropdown-item">Kargo Laut</a></li>
              <li><a href="/udara" class="dropdown-item">Kargo Udara</a></li>
              <li><a href="/pickup" class="dropdown-item">Pickup</a></li>
            </ul>
          </li>        
        </ul>
        <!-- Pesan navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a id="dropdownPesan" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pesan</a>
            <ul aria-labelledby="dropdownPesan" class="dropdown-menu border-0 shadow">
              <li><a href="/harga" class="dropdown-item">Kirim Harga</a></li>
              <li><a href="/pesan" class="dropdown-item">Pesan Jasa</a></li>
            </ul>
          </li>        
        </ul>
        <!-- S&K navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand">
          <li class="nav-item">
            <a href="/syarat" class="nav-link">Syarat & Ketentuan</a>
          </li>
        </ul>
        @if(auth()->check())
        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expan">
          <!-- User Dropdown Menu -->
          <li class="nav-item dropdown">        
            <a class="nav-link" data-toggle="dropdown" href="#">          
              <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">      
              <span class="dropdown-item dropdown-header bg-primary">{{Str::title(auth()->user()->pegawai->nama ?? 'Admin')}}</span>                        
              <div class="dropdown-divider"></div>        
              <a href="/logout" class="dropdown-item logout">
                <i class="fas fa-sign-out-alt mr-2"></i>
                <span class="float-right text-muted text-sm">Logout</span>
              </a>       
            </div>
          </li>     
        </ul>
        @endif
      </div>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer" style="min-height: 100px;background-image: linear-gradient(#f4f6f9,dodgerblue);">
    <div class="row">
      <div class="col-6 col-md-4  text-dark">
        Alamat:<br>
        Komp DepSos No.40,<br>
        Ps. Rebo, Jakarta Timur <br> 
        Indonesia 13760 <br>
      </div>
      <div class="col-6 col-md-4  text-dark">
        <b>Sitemap:</b><br>
        <div class="row">
          <div class="col-sm-6">
            <a href="/tentang" class="text-dark"><u>Tentang Kami</u></a><br>
            <a href="/hubungi" class="text-dark"><u>Hubungi Kami</u></a><br> 
            <a href="/gallery" class="text-dark"><u>Gallery</u></a><br>
            <a href="/brosur" class="text-dark"><u>Download Brosur</u></a>
          </div>
          <div class="col-sm-6">
            <a href="/harga" class="text-dark"><u>Kirim Harga</u></a><br>
            <a href="/pesan" class="text-dark"><u>Pesan Jasa</u></a><br> 
            <a href="/syarat" class="text-dark"><u>Syarat dan Ketentuan</u></a>
          </div>
        </div>
      </div>     
    </div>
    <div class="row">
      <div class="col-md-12 mt-2 text-center text-light">
        <strong>Copyright &copy; 2018-2020 PT. Armada Laju Mas</strong><span class="d-none d-sm-block">All rights reserved.</span>
      </div>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin')}}/dist/js/adminlte.min.js"></script>
<!-- Toastr -->
<script src="{{asset('admin')}}/plugins/toastr/toastr.min.js"></script>
<!-- SweetAlert2 -->
<script src="{{asset('admin')}}/plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript">
  @if(Session::has('sukses'))
    toastr.success("{{Session::get('sukses')}}", "Sukses!", {timeOut: 2000, closeButton: true})   
  @elseif(Session::has('gagal'))
    toastr.error("{{Session::get('gagal')}}", "Gagal!", {timeOut: 2000, closeButton: true})     
  @endif
</script>
@yield('footer')
</body>
</html>
