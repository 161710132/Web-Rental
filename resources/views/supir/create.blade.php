@extends('layouts.adminn')
@section('content')

<section class="card">
<div class="card-body text-secondary"></div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Supir 
			  <br><br>	
			  </div>

			 <div class="panel-body">
              <form class="form-horizontal form-label-left" action="{{ route('supir.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group {{ $errors->has('foto_supir') ? ' has-error' : '' }}">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Foto</label>
                          <div class="col-md-9 pr-1">
                          <input type="file" name="foto_supir" class="form-control" required="" style="background-color: #0000">
                            @if ($errors->has('foto_supir'))
                              <span class="help-block">
                                <strong>{{ $errors->first('foto_supir') }}</strong>
                              </span>
                          @endif
                          </div>
                        </div>

			  <div class="panel-body">
			  	<form action="{{ route('supir.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Supir</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                        <label class="control-label">Jenis Kelamin</label>
                          <br>
                        <label class="radio-inline">
                            <input type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki">Laki-Laki
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan">Perempuan
                        </label>
                          @if ($errors->has('jenis_kelamin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            </span>
                          @endif
            </div>

            			<div class="panel-body">
			  	<form action="{{ route('supir.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nik') ? ' has-error' : '' }}">
			  			<label class="control-label">NIK supir</label>	
			  			<input type="text" name="nik" class="form-control"  required>
			  			@if ($errors->has('nik'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nik') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="panel-body">
			  	<form action="{{ route('supir.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
			  			<label class="control-label">No Handphone supir</label>	
			  			<input type="text" name="no_hp" class="form-control"  required>
			  			@if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
			  		</div>



			  	<div class="panel-body">
			  	<form action="{{ route('supir.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">alamat supir</label>	
			  			<textarea name="alamat" class="form-control"  required></textarea>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>

                        @endif
			  		</div>

			  	<div class="panel-body">
			  	<form action="{{ route('supir.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('umur') ? ' has-error' : '' }}">
			  			<label class="control-label">Umur</label>	
			  			<input type="text" name="umur" class="form-control"  required>
			  			@if ($errors->has('umur'))
                            <span class="help-block">
                                <strong>{{ $errors->first('umur') }}</strong>
                            </span>
                        @endif
			  		</div>

			  	<div class="panel-body">
			  	<form action="{{ route('supir.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('harga_sewasupir') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga_sewasupir" class="form-control"  required>
			  			@if ($errors->has('harga_sewasupir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_sewasupir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  			<div class="btn btn-warning"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection