@extends('master')

@section('header')
<title>Arlamas | Pickup</title>
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
          <li class="breadcrumb-item active">Pickup</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
	<div class="container" style="max-width: 1280px;">
		<div class="row">
      <div class="col-md-10">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Sewa Pickup</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="row">
                    <div class="col-5 p-4">
                      <img class="img-fluid" src="{{asset('/images/mobil.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="col-5 p-4">
                      <img class="img-fluid" src="{{asset('/images/mobil2.png')}}" alt="Card image cap">
                    </div>
                  </div>
                  <div class="card-body">
                    Armada Laju Mas memberikan layanan yang sangat responsive. Kami mewujudkannya dengan memberikan layanan pengambilan barang ditempat pengirim. Kami memahami sibuknya aktivitas clien kami, sementara barang kiriman clien kami sangat berharga dan penting sehingga harus segera dikirim. Clien kami dan siapapun Anda kini bisa langsung menghubungi layanan CSO Armada Laju Mas untuk mendapatkan layanan PICK UP service dari Team kami atau klik <a href="/pesan">disini</a>
                  </div>
                </div>
              </div>                      
            </div>
          </div>
        </div>
      </div>			
			<div class="col-md-2">
        <div class="card card-primary card-outline">
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
</div>
@endsection

@section('footer')
<script type="text/javascript">
	jQuery(document).ready(function(){
		
	});
</script>
@endsection