@extends('layouts.adminn')
@section('content')

<section class="card">
<div class="card-body text-secondary"></div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"> 
			  <br>
			  	<div class="panel-title pull-left"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="row">
			  <div class="col-md-12">
			  <div class="tile">
			  <div class="row">
			  <div class="col-lg-6">
			  	<form action="{{ route('rental.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nik_kons') ? ' has-error' : '' }}">
			  			<label class="control-label">NIK Customer</label>	
			  			<input type="text" name="nik_kons" class="form-control"  required>
			  			@if ($errors->has('nik_kons'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nik_kons') }}</strong>
                            </span>
                        @endif
			  		</div>

			  	
			  		<div class="form-group {{ $errors->has('nama_kons') ? ' has-error' : '' }}">
			  			<label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Customer</label>	
			  			<input type="text" name="nama_kons" class="form-control"  required>
			  			@if ($errors->has('nama_kons'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_kons') }}</strong>
                            </span>
                        @endif
			  		</div>

			  	<div class="form-group {{ $errors->has('jk_kons') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Jenis Kelamin</label>
                          <br>
                        <label class="radio-inline">
                            <input type="radio" name="jk_kons" id="inlineRadio1" value="Laki-Laki">Laki-Laki
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="jk_kons" id="inlineRadio2" value="Perempuan">Perempuan
                        </label>
                          @if ($errors->has('jk_kons'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jk_kons') }}</strong>
                            </span>
                          @endif
            </div>


		<div class="col-md-18">

			  	
			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label col-md-3 col-sm-3 col-xs-3">Alamat Customer</label>	
			  			<textarea  name="alamat" class="form-control"  required></textarea>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="col-lg-4 offset-lg-1">
			  		<div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
			  			<label class="control-label col-md-3 col-sm-3 col-xs-3">No Handphone Customer</label>	
			  			<input type="text" name="no_hp" class="form-control"  required>
			  			@if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		</div>

			  		
			  		<div class="form-group {{ $errors->has('tgl_sewa') ? ' has-error' : '' }}">
			  			<label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Sewa Customer</label>	
			  			<input type="date" name="tgl_sewa" class="form-control"  required>
			  			@if ($errors->has('tgl_sewa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_sewa') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group {{ $errors->has('tgl_kembali') ? ' has-error' : '' }}">
			  			<label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Kembali Customer</label>	
			  			<input type="date" name="tgl_kembali" class="form-control"  required>
			  			@if ($errors->has('tgl_kembali'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_kembali') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('mobil_id') ? ' has-error' : '' }}">
			  			<label class="control-label col-md-3 col-sm-3 col-xs-3">Mobil</label>	
			  			<select name="mobil_id" class="form-control">
			  				@foreach($mobil as $data)
			  				<option value="{{ $data->id }}">{{ $data->merk }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('mobil_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobil_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('supir_id') ? ' has-error' : '' }}">
			  			<label class="control-label col-md-3 col-sm-3 col-xs-3">Supir</label>	
			  			<select name="supir_id" class="form-control">
			  				@foreach($supir as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('supir_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('supir_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection