@extends('master')

@section('header')
<title>Arlamas | Brosur</title>
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
          <li class="breadcrumb-item active">Brosur</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
	<div class="container" style="max-width: 1280px;">
		<div class="row">
			<div class="col-12">
				<div class="card card-primary card-outline">
					<div class="card-header">
						<h3 class="card-title">Download Brosur</h3>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover table-striped" style="width: 100%;">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Produk</th>
									<th>File</th>
								</tr>
							</thead>
							<tbody>
								@foreach($brosur->sortBy('nama') as $b)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>{{Str::title($b->nama)}}</td>
										<td>
											<a href="{{asset('/files/'.$b->file)}}">{{$b->file}}</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
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