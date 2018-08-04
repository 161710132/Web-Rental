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
			  <div class="panel-heading"><center><h2>Data Supir</h2></center>
			  <br><br>
			  	<div class="panel-title pull-right"><a class="btn btn-success" href="{{ route('supir.create') }}">Tambah</a>

			  </div>
			  </div>
			  <br><br>
			  <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
				  	<thead>
			  		<tr>
			  		  <th>No</th>	
			  		  <th>Foto Supir</th>										
					  <th>Nama</th>
					  <!-- <th>Jenis Kelamin</th> -->
					  <th>NIK</th>
					  <!-- <th>No Handphone</th> -->
					  <th>Alamat</th>
					  <!-- <th>Umur</th> -->
					  <!-- <th>Harga Sewa Supir</th> -->
					  <!-- <th>Status</th> -->
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($supir as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td><img src="{{asset('/img/'.$data->foto_supir.'')}} " width="70" height="70"></td>
				    	<td>{{ $data->nama }}</td>
				    	<!-- <td>{{ $data->jenis_kelamin }}</td> -->
				    	<td>{{ $data->nik }}</td>
				    	<!-- <td>{{ $data->no_hp }}</td> -->
				    	<td>{{ $data->alamat }}</td>
				    	<!-- <td>{{ $data->umur }} Tahun</td> -->
				    	<!-- <td>Rp. {{ $data->harga_sewasupir }}</td> -->
				    	<!-- <td>{{ $data->status }}</td> -->
				    	
<td>
	<a class="btn btn-warning" href="{{ route('supir.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('supir.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('supir.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Delete</button>
	</form>
</td>
<td>
                        @if($data->status == 1)
                                <form action="{{ route('supir.sewa',$data->id) }}" method="post">
                                   {{ csrf_field() }}
                                <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#MediumModal">Telah Disewa</button>
                                </form>
                                @elseif($data->publish == 0)
                                <form action="{{ route('supir.sewa',$data->id) }}" method="post">
                                    {{ csrf_field() }}
                                <button class="btn btn-info" type="submit">Sewa</button>
                                </form>
                                </td>
                                @endif
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