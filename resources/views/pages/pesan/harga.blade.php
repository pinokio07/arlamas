@extends('master')

@section('header')
<title>Arlamas | Kirim Brosur</title>
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
          <li class="breadcrumb-item active">Kirim Brosur</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
	<div class="container" style="max-width: 1280px;">		
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">Kirim Brosur</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form action="#" method="post">
          <div class="form-group col-md-4 mb-2">
            <label for="emailPesan">Tuliskan email anda:</label>
            <input type="email" class="form-control" required>
          </div>
          <div class="form-group col-md-4">
            <button type="button" class="btn btn-success elevation-1">Kirim</button>
          </div>
        </form>
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