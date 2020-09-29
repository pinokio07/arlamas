@extends('master')

@section('header')
<title>Arlamas | Home Page</title>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<!-- <div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"> Top Navigation <small>Example 3.0</small></h1>
      </div> --><!-- /.col -->
      <!-- <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Layout</a></li>
          <li class="breadcrumb-item active">Top Navigation</li>
        </ol>
      </div> --><!-- /.col -->
    <!-- </div> --><!-- /.row -->
  <!-- </div> --><!-- /.container-fluid -->
<!-- </div> -->
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      	<div class="card my-2">
      		<div class="card-body">
      			<h1 class="judul text-primary text-center d-none d-sm-block" style="position: absolute;top: 25%;left: 25%; text-shadow: 2px 2px 2px #FFF; z-index: 99;">Selamat datang di situs resmi <br>PT Armada Laju Mas</h1>
      			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset('images/Slider1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('images/Slider2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('images/Slider3.jpg')}}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>              
            </div>            
      		</div>
      	</div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection

@section('footer')
<script type="text/javascript">
	$('.judul').hide();
	jQuery(document).ready(function(){
		$('.judul').slideDown(5000);
	});
</script>
@endsection