@extends('layouts.karyawan')

@section('content')

<section class="card">
<div class="card-body text-secondary"></div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			<br>
			  <div class="panel-heading">Data Mobil 
			  <br>
			  <br>
			  <div class="panel-title pull-right"><a class="btn btn-success" href="{{ route('mobilkaryawan.create') }}">Tambah</a>

			  </div>
			  <br>
			  <br>
			   <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                 <thead>
			  		<tr>
			  		  <th>No</th>
			  		  <th>Foto Mobil</th>
					  <th>Merk Mobil</th>
					  <!-- <th>Perseneling</th> -->
					  <th>Plat No</th>
					  <!-- <th>Warna</th> -->
					  <!-- <th>Tahun Keluaran</th> -->
					  <!-- <th>Harga Sewa</th> -->
					  <!-- <th>Stock</th> -->
					  <!-- <th>Jenis</th> -->
					  <!-- <th>Merk</th> -->
					  <th>Status</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($mobil as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td><img src="{{asset('/img/'.$data->foto_mobil.'')}} " width="85" height="80"></td>
				    	<td>{{ $data->merk }}</td>
				    	<!-- <td><p>{{ $data->perseneling }}</p></td> -->
				    	<td><p>{{ $data->plat_no }}</p></td>
				    	<!-- <td><p>{{ $data->warna }}</p></td>
				    	<td><p>{{ $data->tahun_keluaran }}</p></td> -->
				    	<!-- <td><p>Rp. {{ $data->harga_sewa }}</p></td> -->
				    	<!-- <td><p>{{ $data->stock }}</p></td>
				    	<td><p>{{ $data->jenis }}</p></td> -->
				    	
				    	<td><p>{{ $data->status }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('mobil.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('mobil.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('mobil.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="delete">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection