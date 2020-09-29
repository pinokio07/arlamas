@extends('master')

@section('header')
<title>Arlamas | Gallery</title>
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
          <li class="breadcrumb-item active">Gallery</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
	<div class="container" style="max-width: 1280px;">
		<div class="card-group row">			
			<div class="card card-primary card-outline col-md-6 mb-4 mr-3">
				<div class="card-header">
					<h3 class="card-title">Gallery Foto</h3>
					@if(auth()->check())
					<div class="card-tools">
						<span data-toggle="tooltip" title="Tambah Foto">
	            <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalTambah">
	            	<i class="fas fa-plus"></i>
	            </button>
            </span>
          </div>
          @endif
				</div>
				<div class="card-body" style="overflow: auto;max-height: 450px;">
					<div class="row">
						@foreach($foto as $f)
							<div class="col-6 col-md-3">
								<div class="card bg-light">
									<div class="card-body p-0">
										<img src="/images/gallery/{{$f->foto}}" class="img-fluid">
									</div>
									<div class="card-footer">
										{{Str::title($f->nama)}}
									</div>
									@if(auth()->check())
									<div class="card-body p-0">
										<button class="btn btn-danger btn-block elevation-1 hapus" data-id="{{$f->id}}"><i class="fas fa-trash"></i> Hapus</button>
									</div>
									@endif
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="card card-primary card-outline col-md-6 mb-4">
				<div class="card-header">
					<h3 class="card-title">Gallery Video</h3>
					@if(auth()->check())
					<div class="card-tools">
						<span data-toggle="tooltip" title="Upload Video">
	            <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalUpload">
	            	<i class="fas fa-upload"></i>
	            </button>
          	</span>
          </div>
          @endif
				</div>
				<div class="card-body" style="overflow: auto;max-height: 450px;">
					<div class="row">
						@foreach($video as $v)
							<div class="col-5">
								<div class="embed-responsive embed-responsive-16by9 mr-2">
									<video width="320" height="240" controls class="embed-responsive-item">
									  <source src="{{asset('/video/'.$v->video)}}" type="video/mp4">
									Your browser does not support the video tag.
									</video>							
								</div>
								@if(auth()->check())
									<button class="btn btn-sm btn-warning btn-block hapusvideo" data-id="{{$v->id}}"><i class="fas fa-trash"></i> Hapus</button>
								@endif
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalTambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Foto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/tambahfoto" method="POST" enctype="multipart/form-data">
      	@csrf
	      <div class="modal-body">
	        <div class="form-group">
	        	<label>Pilih Foto</label>
	        	<input type="file" class="form-control form-control-sm" multiple="multiple" name="foto[]" required="required" accept="image/*">
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

<div class="modal fade" id="modalUpload">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload Video</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/uploadvideo" method="POST" enctype="multipart/form-data">
      	@csrf
	      <div class="modal-body">
	      	<div class="form-group">
	      		<label>Nama Video</label>
	      		<input type="text" class="form-control form-control-sm" name="nama" required="required">
	      	</div>
	        <div class="form-group">
	        	<label>Pilih Video</label>
	        	<input type="file" class="form-control form-control-sm" name="video" required="required" accept="video/mp4">
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

		$(document).on('click', '.hapus', function(){
			var id = $(this).data('id');

			Swal.fire({			
				title: 'Hapus foto?',			
				html: 'Data tidak dapat dikembalikan lagi!',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Batal',
				confirmButtonText: 'Ya, hapus!'
			}).then((result) => {
				if (result.value) {
					window.location = "/hapusfoto?fid="+id;
				}
			});
		});

		$(document).on('click', '.hapusvideo', function(){
			var id = $(this).data('id');

			Swal.fire({			
				title: 'Hapus Video?',			
				html: 'Data tidak dapat dikembalikan lagi!',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Batal',
				confirmButtonText: 'Ya, hapus!'
			}).then((result) => {
				if (result.value) {
					window.location = "/hapusvideo?vid="+id;
				}
			});
		});

		

	});
</script>
@endsection