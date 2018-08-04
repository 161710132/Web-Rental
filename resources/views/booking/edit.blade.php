@extends('layouts.admin')
@section('content')
<section class="card">
<div class="card-body text-secondary">col-lg-12</div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Booking 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('booking.update',$booking->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('tanggal_pemesanan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Pemesanan</label>	
			  			<input type="text" name="tanggal_pemesanan" class="form-control" value="{{ $booking->tanggal_pemesanan }}" required>
			  			@if ($errors->has('tanggal_pemesanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_pemesanan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tanggal_pengembalian') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Pengembalian</label>	
			  			<input type="text" value="{{ $booking->tanggal_pengembalian }}" name="tanggal_pengembalian" class="form-control"  required>
			  			@if ($errors->has('tanggal_pengembalian'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_pengembalian') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('mobil_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Mobil</label>	
			  			<select name="mobil_id" class="form-control">
			  				@foreach($mobil as $data)
			  				<option value="{{ $data->id }}" {{ $selectedMobil == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('mobil_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobil_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('supir_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Supir</label>	
			  			<select name="supir_id" class="form-control">
			  				@foreach($supir as $data)
			  				<option value="{{ $data->id }}" {{ $selectedSupir == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('supir_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('supir_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection