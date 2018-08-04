@extends('layouts.adminn')
@section('content')

<section class="card">
<div class="card-body text-secondary"></div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Perbaharui Data Mobil
			  <br> 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>

			  <div class="panel-body">
              <form class="form-horizontal form-label-left" action="{{ route('mobil.update',$mobil->id) }}" method="post" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
              {{ csrf_field() }}

              <div class="form-group {{ $errors->has('foto_mobil') ? ' has-error' : '' }}">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Foto mobil</label>
                          <div class="col-md-9 pr-1">
                          <input type="file" name="foto_mobil" class="form-control" value="{{ $mobil->foto_mobil}}"  style="background-color: #0000">
                          @if(isset($mobil)&& $mobil->foto_mobil)
                          <p>
                          	<br>
                          	<img src="{{asset('img/'.$mobil->foto_mobil)}}">
                          </p>
                          @endif
                            @if ($errors->has('foto_mobil'))
                              <span class="help-block">
                                <strong>{{ $errors->first('foto_mobil') }}</strong>
                              </span>
                          @endif
                          </div>
                        </div>

			  <div class="form-group {{ $errors->has('merk') ? ' has-error' : '' }}">
			  			<label class="control-label">merk</label>	
			  			<input type="text" value="{{ $mobil->merk }}" name="merk" class="form-control"  required>
			  			@if ($errors->has('merk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk') }}</strong>
                            </span>
                        @endif
			  		</div>


			  		<div class="form-group {{ $errors->has('perseneling') ? ' has-error' : '' }}">
			  			<label class="control-label">perseneling</label>	
			  			<input type="text" value="{{ $mobil->perseneling }}" name="perseneling" class="form-control"  required>
			  			@if ($errors->has('perseneling'))
                            <span class="help-block">
                                <strong>{{ $errors->first('perseneling') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('plat_no') ? ' has-error' : '' }}">
			  			<label class="control-label">plat_no</label>	
			  			<input type="text" value="{{ $mobil->plat_no }}" name="plat_no" class="form-control"  required>
			  			@if ($errors->has('plat_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('plat_no') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
			  			<label class="control-label">warna</label>	
			  			<input type="text" value="{{ $mobil->warna }}" name="warna" class="form-control"  required>
			  			@if ($errors->has('warna'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tahun_keluaran') ? ' has-error' : '' }}">
			  			<label class="control-label">tahun_keluaran</label>	
			  			<input type="text" value="{{ $mobil->tahun_keluaran }}" name="tahun_keluaran" class="form-control"  required>
			  			@if ($errors->has('tahun_keluaran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun_keluaran') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga_sewa') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" value="{{ $mobil->harga_sewa }}" name="harga_sewa" class="form-control"  required>
			  			@if ($errors->has('harga_sewa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_sewa') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		

			  		<div class="form-group {{ $errors->has('jenis') ? ' has-error' : '' }}">
			  			<label class="control-label">jenis</label>	
			  			<input type="text" value="{{ $mobil->jenis }}" name="jenis" class="form-control"  required>
			  			@if ($errors->has('jenis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis') }}</strong>
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