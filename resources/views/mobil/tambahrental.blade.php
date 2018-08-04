@extends('layouts.adminn')
@section('content')
<div class="row">
	<div class="col-md-12">
		<section class="content-header">
    		 <h1>
    		   Rental Mobil
    		 </h1>
      		<ol class="breadcrumb">
      		  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      		  <li class="fa fa-car">Rental</li><li class="active">Rental Mobil</li>
      		</ol>
    	</section><br><br>
    	<div class="panel panel-danger">
			<div class="panel-heading">Rental Mobil
		</div>

		<div class="panel-body">
		<form action="{{route('tambah.update',$mobil->id)}}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			{{csrf_field()}}
		
				<input type="hidden" name="foto" value="{{$mobil->foto_mobil}}" >
				<input type="hidden" name="mobil_id" value="{{$mobil->id}}" >
				<input type="hidden" name="plat"  value="{{$mobil->plat_no}}">
				<input type="hidden" name="merk"  value="{{$mobil->merk}}">
				<input type="hidden" name="perseneling"  value="{{$mobil->perseneling}}">
				<input type="hidden" name="harga_sewa"  value="{{$mobil->harga_sewa}}">

				<input type="hidden" name="status" value="Disewa">

			<div class="form-group{{ $errors->has('nik_kons') ? ' has-error' : '' }}">
				<label class="control-lable">No Identitas</label>
				{!! Form::text('nik_kons', null, ['class'=>'form-control']) !!}
				{!! $errors->first('nik_kons', '<p class="help-block">:message</p>') !!}
			</div>

			<div class="form-group">
				<label class="control-lable">Nama</label>
				<input type="text" name="nama_kons" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">Jenis Kelamin</label><br>
				<select class="form-control" name="jk">
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
					<option value="Lainnya">Lainnya</option>
				</select>
			</div>

			<div class="form-group">
				<label class="control-lable">Alamat</label>
				<textarea class="form-control" name="alamat"></textarea>
			</div>

			<div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
				<label class="control-lable">No HP</label>
				{!! Form::text('no_hpkons', null, ['class'=>'form-control', 'placeholder'=>'08xxxxxxxxxx']) !!}
				{!! $errors->first('no_hpkons', '<p class="help-block">:message</p>') !!}
			</div>

			<div class="form-group">
				<label class="control-lable">Tanggal Sewa</label>
				<input type="date" placeholder="yyyy-mm-dd" name="tgl_sewa" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">Tanggal Kembali</label>
				<input type="date" placeholder="yyyy-mm-dd" name="tgl_kembali" class="form-control" required="">
			</div> 

			<div class="form-group">
				<label class="control-lable">Supir</label>
				<select class="form-control" name="supir_id">
					@foreach($supir as $data)
					<option value="{{$data->id}}">{{$data->nama}}</option>
					@endforeach
				</select>
			</div>



			<div class="pull-right">
			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
			</div>
		</form>
	</div>
	</div>
</div>
@endsection