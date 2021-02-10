@extends('master')

@section('header')
<title>Arlamas | Hubungi Kami</title>
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
          <li class="breadcrumb-item active">Hubungi</li>
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
            <h3 class="card-title">Hubungi Kami</h3>					
            <div class="card-tools">
              @if(auth()->check())
              <button type="button" class="btn btn-tool"><i class="fas fa-edit"></i>
              </button>
              @endif
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h3><i class="fas fa-home"></i></h3>
                <p>{!!$perusahaan->alamat!!}</p>
              </div>
              <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7032239811124!2d106.8608177141722!3d-6.302669863435891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed8189a44735%3A0xd58d8468969b08d1!2sJl.+Term.+Simatupang+No.40%2C+Gedong%2C+Ps.+Rebo%2C+Kota+Jakarta+Timur%2C+Daerah+Khusus+Ibukota+Jakarta+13760!5e0!3m2!1sen!2sid!4v1534323284451" width="600" height="250" frameborder="0" style="border:1px solid silver;" allowfullscreen></iframe>
              </div>
              <div class="col-md-12 mb-2">
                <table>
                  <tr>
                    <td><i class="fas fa-phone"></i></td>
                    <td><a href="tel:{{$perusahaan->telepon}}" style="margin-left: 20px" target="_blank"><u>{{$perusahaan->telepon}}</u></a></td>
                  </tr>
                  <tr>
                    <td><i class="fab fa-whatsapp"></i></td>
                    <td><a href="https://api.whatsapp.com/send?phone={{$perusahaan->whatsapp}}&text=Salam%20...%20" style="margin-left: 20px" target="_blank"><u>+{{$perusahaan->whatsapp}}</u></a></td>
                  </tr>
                </table>
              </div>
              <div class="col-md-12">
                <table>
                  <tr>
                    <td rowspan="100%" style="vertical-align: top;width: 40px;"><i class="fas fa-envelope"></i></td>
                    @foreach($pegawai as $p)
                    <td><a href="mailto:{{$p->user->email}}"><u>{{$p->user->email}}</u></a></td>									
                  </tr>
                    @endforeach
                </table>
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
            <a href="/tentang" class="dropdown-item">Tentang Perusahaan</a>
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