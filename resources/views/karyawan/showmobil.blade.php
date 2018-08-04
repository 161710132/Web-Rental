@extends('layouts.karyawan')
@section('content')
<br>


<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"> Data Mobil
			  <br><br>
			  	
			  </div>
			  <div class="panel-body">

<label class="control-label"> Foto Mobil :</label> {{$mobil->foto_mobil}}
<br>
<label class="control-label">Nama  :</label> {{$mobil->merk}}
<br>
<label class="control-label">Perseneling :</label> {{$mobil->perseneling}}
<br>
<label class="control-label">Plat No :</label> {{$mobil->plat_no}}
<br>
<label class="control-label">Warna :</label> {{$mobil->warna}}
<br>
<label class="control-label">Tahun Keluaran :</label> {{$mobil->tahun_keluaran}}
<br>
<label class="control-label">Harga Sewa :</label> {{$mobil->harga_sewa}}
<br>
<label class="control-label">Stock :</label> {{$mobil->stock}}
<br>
<label class="control-label">Jenis :</label> {{$mobil->jenis}}
<br>

<label class="control-label">Status :</label> {{$mobil->status}}
<br>


<div class="panel-title pull-right">
<a class="btn btn-primary" href="{{ route('karyawan.index') }}">Kembali</a>

			  </div>



        		</div>
			</div>	
		</div>
	</div>
</div>
@endsection