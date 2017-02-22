@extends('layouts.app2')
@section('content')

<div class="container-fluid">
	<h1>Data Tunjangan</h1>
	<br>
	<a href="{{ url('/Tunjangan/create')}}" class="btn btn-primary">Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="info">
			<th><center>No</center></th>
			<th><center>Kode Tunjangan</center></th>
			<th><center>Nama Jabatan</center></th>
			<th><center>Nama Golongan</center></th>
			<th><center>Status</center></th>
			<th><center>Jumlah Anak</center></th>
			<th><center>Besaran Uang</center></th>

			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		@foreach ($tunjangan as $data)
		<tr>
			<td><center>{{ $no++ }}</center></td>
			<td><center>{{ $data->Kode_tunjangan}}</center></td>
			<td><center>{{ $data->jabatans->Nama_jabatan}}</center></td>
			<td><center>{{ $data->golongans->Nama_golongan}}</center></td>
			<td><center>{{ $data->Status}}</center></td>
			<td><center>{{ $data->Jumlah_anak}} Anak</center></td>
			<td><center>Rp. {{ number_format($data->Besaran_uang)}}</center></td>
			<td><center><a href="{{ url('Tunjangan', $data->id)}}" class="btn btn-primary">Lihat</a></center></td>
			<td><center><a href="{{ route('Tunjangan.edit', $data->id)}}" class="btn btn-warning">Ubah</a></center></td>
			<td><center>
				{!! Form::open(['method'=> 'DELETE', 'route' => ['Tunjangan.destroy', $data->id]]) !!}
				{!! Form::submit('Hapus', ['class' =>'btn btn-danger']) !!}
			</center></td>
		</tr>
		@endforeach
	</table>
</div>
</div>
@stop