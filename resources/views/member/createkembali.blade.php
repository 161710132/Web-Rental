@extends('layouts.member')
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
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>

			  <div class="panel-body">



              <form class="form-horizontal form-label-left" action="{{ route('member.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}



             <div class="form-group {{ $errors->has('tgl_kembali_akhir') ? ' has-error' : '' }}">
			  			<label class="control-label">tgl_kembali_akhir</label>	
			  			<input type="date" name="tgl_kembali_akhir" class="form-control"  required>
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
			  				<option value="{{ $data->id }}">{{ $data->nik_kons }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('rental_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rental_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<!-- <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
			  			<label class="control-label">Status</label>	
			  			<input type="text" name="status" class="form-control"  >
			  			@if ($errors->has('status'))
                            <span class="help-block">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                        @endif
			  		</div> -->
			  		<!-- Rental -->
			  		
			  		<!-- end -->
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