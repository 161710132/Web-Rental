@extends('layouts.adminn')
@section('content')
<br>


<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"> Data Peminjaman Mobil dengan Nama  {{$kembali->Rental->nama_kons}}
			  <br><br>
			  	
			  </div>
			  <div class="panel-body">

<label class="control-label">NIK Konsumen :</label> {{$kembali->Rental->nik_kons}}
<br>
<label class="control-label">Nama Konsumen :</label> {{$kembali->Rental->nama_kons}}
<br>
<label class="control-label">Jenis Kelamin :</label> {{$kembali->Rental->jk_kons}}
<br>
<label class="control-label">Alamat :</label> {{$kembali->Rental->alamat}}
<br>
<label class="control-label">No Handphone :</label> {{$kembali->Rental->no_hp}} 
<br>
<label class="control-label">Tanggal Sewa :</label> {{$kembali->Rental->tgl_sewa}}
<br>
<label class="control-label">Tanggal Kembali :</label> {{$kembali->Rental->tgl_kembali}}
<br>
<label class="control-label">Jumlah Hari :</label> {{$kembali->Rental->jumlah_hari}}
<br>
<label class="control-label">Total Sewa :</label> {{$kembali->Rental->total_sewa}} 
<br>

<label class="control-label">Tanggal Kembali Akhir :</label> {{$kembali->tgl_kembali_akhir}} 
<br>
<label class="control-label">Jumlah Hari :</label> {{$kembali->jumlah_hari}} Hari 
<br>
<label class="control-label">Telat :</label> {{$kembali->telat}} 
<br>
<label class="control-label">Denda :</label> {{$kembali->denda}} 
<br>
<label class="control-label">Total Harga :</label> {{$kembali->total_harga}} 
<br>
<label class="control-label">Total Sewa  :</label> {{$kembali->Rental->total_sewa}}
<br>

<div class="panel-title pull-right">
<a class="btn btn-primary" href="{{ route('kembali.index') }}">Kembali</a>
<a class="btn btn-danger" href="/adminn/thanks">Beres</a>

			  </div>

<!-- <div class="panel-title pull-right"><a class="btn btn-success" href="{{ route('kembali.index') }}">Kembali</a> <div class="panel-title pull-right"><a class="btn btn-success" href="thanks">Beres</a></div>

		

</div> -->

        		</div>
			</div>	
		</div>
	</div>
</div>
@endsection