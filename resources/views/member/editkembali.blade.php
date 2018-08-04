@extends('layouts.member')
@section('content')

<section class="card">
<div class="card-body text-secondary"></div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			<br>
			<br>
			  <div class="panel-heading">Perbaharui Data Pengembalian
			  <br> 
			  	
			  </div>

			  <div class="panel-body">
              <form class="form-horizontal form-label-left" action="{{ route('member.update',$kembali->id) }}" method="post" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
              {{ csrf_field() }}

              

			  <div class="form-group {{ $errors->has('tgl_kembali_akhir') ? ' has-error' : '' }}">
			  			<label class="control-label">tgl_kembali_akhir</label>	
			  			<input type="date" value="{{ $kembali->tgl_kembali_akhir }}" name="tgl_kembali_akhir" class="form-control"  required>
			  			@if ($errors->has('tgl_kembali_akhir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_kembali_akhir') }}</strong>
                            </span>
                        @endif
			  		</div>


			  		

			  		<div class="form-group {{ $errors->has('rental_id') ? ' has-error' : '' }}">
			  			<label class="control-label">NIK Konsumen</label>	
			  			<select name="rental_id" class="form-control">
			  				@foreach($rental as $data)
			  				<option value="{{ $data->id }}" {{ $selectedRental == $data->id ? 'selected="selected"' : '' }} >{{ $data->nik_kons }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('rental_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rental_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('rental_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Konsumen</label>	
			  			<select name="rental_id" class="form-control">
			  				@foreach($rental as $data)
			  				<option value="{{ $data->id }}" {{ $selectedRental == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_kons }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('rental_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rental_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  			<div class="btn btn-danger"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection