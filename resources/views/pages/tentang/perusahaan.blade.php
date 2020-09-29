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
					@if(auth()->check())
					<div class="card-tools">
            <button type="button" class="btn btn-tool"><i class="fas fa-edit"></i>
            </button>
          </div>
          @endif
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
				</div>
				<div class="card-body">
					<p>PT Armada Laju Mas adalah perusahaan yang bergerak dibidang ekspedisi kargo yang mempunyai Visi dan Misi :</p>
					<p>Visi: <br>
						<span class="text-justify">{!!$perusahaan->visi!!}</span>
					</p>
					<p>Misi: <br>
						<span class="text-justify">{!!$perusahaan->misi!!}</span>
					</p>
					<p>Kelebihan Layanan Kami: <br>
						<span class="text-justify">{!!$perusahaan->keunggulan!!}</span>
					</p>
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
		<div class="row">
			<div class="col-md-12">
				<div class="card-group mb-4 row">
					@foreach($pegawai as $p)
					<div class="card card-primary col-6 col-md-2 p-0 mr-0 mr-md-3 elevation-3">
						<div class="card-header">
							<h3 class="card-title">{{Str::title($p->jabatan)}}</h3>							
						</div>
						<img class="card-img-top w-100 h-auto" src="{{$p->getAvatar()}}" alt="Foto Pegawai">
						<div class="card-footer text-center">
							{{Str::title($p->nama)}}
						</div>
						<div class="card-body p-1">
							<button class="btn btn-primary btn-block elevation-1"><i class="fas fa-envelope"></i> Kirim Email</button>
							@if(auth()->check())
							<button class="btn btn-warning btn-block elevation-1 edit" data-toggle="modal" data-target="#modal-edit" data-pegawai="{{$p->id}}"><i class="fas fa-edit"></i> Edit</button>
							@endif
						</div>
					</div>
					@endforeach
					@if(auth()->check())
					<div class="card col-md-2 elevation-3">
						<div class="card-body">
							<button class="btn btn-primary btn-block h-100 elevation-1" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus"></i></button>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Pegawai</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-horizontal" action="/tambahpegawai" method="POST" enctype="multipart/form-data">
      	@csrf
	      <div class="modal-body">
	        <div class="form-group row">
	        	<label class="col-sm-3 col-form-label">Nama Pegawai</label>
	        	<div class="col-sm-8">
	        		<input type="text" class="form-control form-control-sm" name="nama" required="required">
	        	</div>
	        </div>
	        <div class="form-group row">
	        	<label class="col-sm-3 col-form-label">Jabatan</label>
	        	<div class="col-sm-8">
	        		<input type="text" class="form-control form-control-sm" name="jabatan" required="required">
	        	</div>
	        </div>
	        <div class="form-group row">
	        	<label class="col-sm-3 col-form-label">Foto Pegawai</label>
	        	<div class="col-sm-8">
	        		<input type="file" class="form-control form-control-sm" name="avatar">
	        	</div>
	        </div>
	        <hr class="w-100">
	        <div class="form-group row">
	        	<label class="col-sm-3 col-form-label">Username</label>
	        	<div class="col-sm-8">
	        		<input type="text" class="form-control form-control-sm" name="username" required="required">
	        	</div>
	        </div>
	        <div class="form-group row">
	        	<label class="col-sm-3 col-form-label">Email</label>
	        	<div class="col-sm-8">
	        		<input type="email" class="form-control form-control-sm" name="email" required="required">
	        	</div>
	        </div>
	       	<div class="form-group row">
	        	<label class="col-sm-3 col-form-label">Password</label>
	        	<div class="col-sm-8">
	        		<input type="password" class="form-control form-control-sm" name="password" required="required">
	        	</div>
	        </div>
	      </div>
	      <div class="modal-footer justify-content-between">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Pegawai</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form" class="form-horizontal" method="POST" enctype="multipart/form-data">
      	@csrf
      	<input type="hidden" name="id" id="id">
	      <div class="modal-body">
	        <div class="form-group row">
	        	<label class="col-sm-3 col-form-label">Nama Pegawai</label>
	        	<div class="col-sm-8">
	        		<input type="text" class="form-control form-control-sm" name="nama" id="nama" required="required">
	        	</div>
	        </div>
	        <div class="form-group row">
	        	<label class="col-sm-3 col-form-label">Jabatan</label>
	        	<div class="col-sm-8">
	        		<input type="text" class="form-control form-control-sm" name="jabatan" id="jabatan" required="required">
	        	</div>
	        </div>
	        <div class="form-group row">
	        	<label class="col-sm-3 col-form-label">Foto Pegawai</label>
	        	<div class="col-sm-8">
	        		<input type="file" class="form-control form-control-sm" name="avatar">
	        	</div>
	        </div>
	        <hr class="w-100">
	        <div class="form-group row">
	        	<label class="col-sm-3 col-form-label">Username</label>
	        	<div class="col-sm-8">
	        		<input type="text" class="form-control form-control-sm" name="username" id="username" required="required">
	        	</div>
	        </div>
	        <div class="form-group row">
	        	<label class="col-sm-3 col-form-label">Email</label>
	        	<div class="col-sm-8">
	        		<input type="email" class="form-control form-control-sm" name="email" id="email" required="required">
	        	</div>
	        </div>
	       	<div class="form-group row">
	        	<label class="col-sm-3 col-form-label">Password</label>
	        	<div class="col-sm-8">
	        		<input type="password" class="form-control form-control-sm" name="password">
	        	</div>
	        </div>
	      </div>
	      <div class="modal-footer justify-content-between">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection

@section('footer')
<script type="text/javascript">
	jQuery(document).ready(function(){
		$(document).on('click', '.edit', function(){
			var pegawai = $(this).data('pegawai');

			$.ajax({
				url: '/getpegawai/'+pegawai,
				type: 'GET',
				data:{
					pegawai: pegawai,
				},
				success:function(msg){
					$('#modal-edit #form').attr('action', '/editpegawai/'+msg.id);
					$('#modal-edit #id').val(msg.id);
					$('#modal-edit #nama').val(msg.nama);
					$('#modal-edit #jabatan').val(msg.jabatan);
					$('#modal-edit #username').val(msg.username);
					$('#modal-edit #email').val(msg.email);
				}
			});
		});
	});
</script>
@endsection