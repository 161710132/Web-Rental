@extends('layouts.adminn')
@section('content')
<br>


<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"> Data Peminjaman Mobil dengan Nama  {{$rental->nama_kons}}
			  <br><br>
			  	
			  </div>
			  <div class="panel-body">

<label class="control-label">NIK Konsumen :</label> {{$rental->nik_kons}}
<br>
<label class="control-label">Nama Konsumen :</label> {{$rental->nama_kons}}
<br>
<label class="control-label">Jenis Kelamin :</label> {{$rental->jk_kons}}
<br>
<label class="control-label">Alamat :</label> {{$rental->alamat}}
<br>
<label class="control-label">No Handphone :</label> {{$rental->no_hp}}
<br>
<label class="control-label">Tanggal Sewa :</label> {{$rental->tgl_sewa}}
<br>
<label class="control-label">Tanggal Kembali :</label> {{$rental->tgl_kembali}}
<br>
<label class="control-label">Jumlah Hari :</label> {{$rental->jumlah_hari}}
<br>
<label class="control-label">Total Sewa :</label> {{$rental->total_sewa}}
<br>
<label class="control-label">Mobil yang Disewa :</label> {{ $rental->Mobil->merk }}
<br>
<label class="control-label">Supir yang Disewa :</label> {{ $rental->Supir->nama }}

<div class="panel-title pull-right">
<a class="btn btn-primary" href="{{ route('rental.index') }}">Kembali</a>
<a class="btn btn-warning" href="{{ route('kembali.create') }}">pengembalian</a>

			  </div>
			  </div>



        		</div>
			</div>	
		</div>
	</div>
</div>
@endsection