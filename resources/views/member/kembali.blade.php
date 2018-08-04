@extends('layouts.member')
@section('content')

<section class="card">
<div class="card-body text-secondary"></div>
</section>
<div class="col-lg-12 stretch-card">
	<div class="container">
		<div class="card">
                <div class="card-body">
			  <div class="card-title">Data Pengembalian 
			  <br>
			  <br>
			  <div class="panel-title pull-right"><a class="btn btn-success" href="{{ route('member.create') }}">Tambah</a>

			  </div>
			  <br>
			  <br>
			   <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                 <thead>
			  		<tr>
			  		  <th>No</th>
			  		  <th>Tanggal Kembali Akhir</th>
			  		  <th>NIK Konsumen</th>
			  		  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($kembali as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->tgl_kembali_akhir }}</td>
				    	<td><p>{{ $data->Rental->nik_kons }}</p></td>
				    	
				    	
				    	

				    	
						<td>
							<a class="btn btn-warning" href="{{ route('member.edit',$data->id) }}">Edit</a>
						</td>

						<td>
							<a class="btn btn-primary" href="{{ route('member.show',$data->id) }}">Show</a>
						</td>

						<!-- <td>
							<a href="{{ route('kembali.index',$data->id) }}" class="btn btn-success">Pengembalian</a>
						</td> --> 
						<td>
							<form method="post" action="{{ route('kembali.destroy',$data->id) }}">
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