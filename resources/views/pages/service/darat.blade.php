@extends('master')

@section('header')
<title>Arlamas | Tentang Kami</title>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container" style="max-width: 1280px;">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>          
          <li class="breadcrumb-item active">Tentang</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
	<div class="container" style="max-width: 1280px;">
		<div class="card-group mb-4 row">			
			<div class="card card-primary card-outline col-md-10 mr-3">
				<div class="card-header">
					<h3 class="card-title">Profil Perusahaan</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
	            <i class="fas fa-minus"></i>
	          </button>
					</div>
				</div>
				<div class="card-body">
					
				</div>
			</div>
			<div class="card card-primary card-outline col-md-2">
				<div class="card-header">
					<h3 class="card-title">Hubungi Kami</h3>
				</div>
				<div class="card-body px-1">
					<a href="/hubungi" class="dropdown-item">Alamat Perusahaan</a>
					<div class="dropdown-divider"></div>
					<a href="/brosur" class="dropdown-item">Kirim Brosur</a>
					<div class="dropdown-divider"></div>
					<a href="/pesan" class="dropdown-item">Pesan Jasa</a>
					<div class="dropdown-divider"></div>
				</div>
			</div>
		</div>		
	</div>
</div>
@endsection

@section('footer')
<script type="text/javascript">
	jQuery(document).ready(function(){
		
	});
</script>
@endsection