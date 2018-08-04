@extends('layouts.adminn')
@section('content')

<section class="card">
<div class="card-body text-secondary"></div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			<br><br>
			  <div class="panel-heading"><center><h2>Data Rental</h2></center>
			  <br><br>
			  	<div class="panel-title pull-right"><a class="btn btn-success" href="{{ route('rental.create') }}">Tambah</a>

			  </div>
			  </div>
			  <br><br>
			  <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <!-- <th>NIK Konsumen</th> -->
					  <th>Nama Konsumen</th>
					  <th>Jenis Kelamin</th>
					  <th>Alamat Konsumen</th>
					  <!-- <th>No Handphone Konsumen</th> -->
					  <!-- <th>Nama Mobil</th>
					  <th>Nama Supir</th> -->
					  <!-- <th>Status</th> -->
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($rental as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<!-- <td>{{ $data->nik_kons }}</td> -->
				    	<td>{{ $data->nama_kons }}</td>
				    	<td>{{ $data->jk_kons }}</td>
				    	<td>{{ $data->alamat}}</td>
				    	<!-- <td>{{ $data->no_hp}}</td> -->
				    	<!-- <td><p>{{ $data->Mobil->nama }}</p></td>
				    	<td><p>{{ $data->Supir->nama }}</p></td> -->
				    	<!-- <td>{{ $data->status}}</td> -->



				    	

                </td>
<td>
	<a class="btn btn-warning" href="{{ route('rental.edit',$data->id) }}">Edit</a>
</td> 
<td>
	<a href="{{ route('rental.show',$data->id) }}" class="btn btn-success">Show</a>
</td>




<td>
	<form method="post" action="{{ route('rental.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

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