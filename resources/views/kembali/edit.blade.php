@extends('layouts.adminn')
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
		<form action="{{route('edit.update',$kembali->id)}}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			{{csrf_field()}}


			
			<input type="hidden" name="jumlah_hari" value="{{$kembali->jumlah_hari}}">
			<input type="hidden" name="total_sewa" value="{{$kembali->total_sewa}}">
			<input type="hidden" name="tgl_kembali_akhir" value="{{$kembali->tgl_kembali_akhir}}">			
			<input type="hidden" name="jumlah_hari_akhir" value="{{$kembali->jumlah_hari_akhir}}">
			<input type="hidden" name="telat" value="{{$kembali->telat}}">
			<input type="hidden" name="denda" value="{{$kembali->denda}}">
			<input type="hidden" name="total_harga" value="{{$kembali->total_harga}}">

			<div class="form-group">
				<div class="col-md-4">
					<div class="well">
						<center><b> Data Rental</b></center><br>
					NIK Konsumen : <b>Rp. {{$rental->nik_kons}}</b><br>
					Nama Konsumen : <b>Rp. {{$rental->nama_kons}}</b><br>
					Jenis Kelamin : <b>Rp. {{$rental->jk_kons}}</b><br>
					Alamat : <b>Rp. {{$rental->alamat}}</b><br>
					No Handphone : <b>Rp. {{$rental->no_hp}}</b><br>
					Tanggal Sewa : <b>Rp. {{$rental->tgl_sewa}}</b><br>
					Tanggal Kembali : <b>Rp. {{$rental->tgl_kembali}}</b><br>
					Jumlah Hari : <b>Rp. {{$rental->jumlah_hari}}</b><br>
					Total Sewa : <b>Rp. {{$rental->total_sewa}}</b><br>
					Mobil : <b>{{$rental->Mobil->mobil_id}}</b><br>
					Supir : <b>{{$rental->Supir->supir_id}}</b>
					</div>
				</div>
			</div>

              

			  <div class="form-group {{ $errors->has('tgl_kembali_akhir') ? ' has-error' : '' }}">
			  			<label class="control-label">tgl_kembali_akhir</label>	
			  			<input type="date" value="{{ $kembali->tgl_kembali_akhir }}" name="tgl_kembali_akhir" class="form-control"  required>
			  			@if ($errors->has('tgl_kembali_akhir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_kembali_akhir') }}</strong>
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