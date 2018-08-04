@extends('layouts.adminn')
@section('content')

<section class="card">
<div class="card-body text-secondary"></div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Post 
			  <br><br>
			  </div>
			  <div class="panel-body">
              <form class="form-horizontal form-label-left" action="{{ route('mobil.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

             <div class="form-group {{ $errors->has('foto_mobil') ? ' has-error' : '' }}">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Gambar</label>
                          <div class="col-md-9 pr-1">
                        <input type="file" name="foto_mobil" class="form-control" required="" style="background-color: #0000">
                            @if ($errors->has('foto_mobil'))
                              <span class="help-block">
                                <strong>{{ $errors->first('foto_mobil') }}</strong>
                              </span>
                          @endif
                          </div>
                        </div>

			  <div class="panel-body">
			  	<form action="{{ route('mobil.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('merk') ? ' has-error' : '' }}">
			  			<label class="control-label">merk Mobil</label>	
			  			<input type="text" name="merk" class="form-control"  required>
			  			@if ($errors->has('merk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('perseneling') ? ' has-error' : '' }}">
			  			<label class="control-label">Perseneling</label>	
			  			<input type="text" name="perseneling" class="form-control"  required>
			  			@if ($errors->has('perseneling'))
                            <span class="help-block">
                                <strong>{{ $errors->first('perseneling') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('plat_no') ? ' has-error' : '' }}">
			  			<label class="control-label">Plat No</label>	
			  			<input type="text" name="plat_no" class="form-control"  required>
			  			@if ($errors->has('plat_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('plat_no') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
			  			<label class="control-label">warna</label>	
			  			<input type="text" name="warna" class="form-control"  required>
			  			@if ($errors->has('warna'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tahun_keluaran') ? ' has-error' : '' }}">
			  			<label class="control-label">tahun_keluaran</label>	
			  			<input type="text" name="tahun_keluaran" class="form-control"  required>
			  			@if ($errors->has('tahun_keluaran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun_keluaran') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga_sewa') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga_sewa" class="form-control"  required>
			  			@if ($errors->has('harga_sewa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_sewa') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		

			  		<div class="form-group {{ $errors->has('jenis') ? ' has-error' : '' }}">
			  			<label class="control-label">jenis</label>	
			  			<input type="text" name="jenis" class="form-control"  required>
			  			@if ($errors->has('jenis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<input type="hidden" name="status" value="Tidak">

			  		<!-- <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
			  			<label class="control-label">Status</label>	
			  			<input type="text" name="status" class="form-control"  >
			  			@if ($errors->has('status'))
                            <span class="help-block">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                        @endif
			  		</div> -->
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		
			  		<div class="btn btn-success "><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  	</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection