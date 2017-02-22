@extends('layouts.app2')
@section('content')

<div class="container-fluid">
	<h1><b>Data Pegawai</b> (Dilihat Khusus Pegawai)</h1>
	<br><br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="info">
			<th><center>No</center></th>
			<th><center>NIP</center></th>
			<th><center>Nama pegawai</center></th>
			<th><center>Nama Jabatan</center></th>
			<th><center>Nama Golongan</center></th>
			<th><center>Permission</center></th>
			<th><center>Photo</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		@foreach ($showpeg as $data)
		<tr>
			<td><center>{{ $no++ }}</center></td>
			<td><center>{{ $data->Nip}}</center></td>
			<td><center>{{ $data->users->name}}</center></td>
			<td><center>{{ $data->jabatans->Nama_jabatan}}</center></td>
			<td><center>{{ $data->golongans->Nama_golongan}}</center></td>
			<td><center>{{ $data->users->permission}}</center></td>
			<td><center><img src="{{asset('/assets/image/'.$data->Photo)}}" height="60px" width="60px"></center></td>
			<td><center><a href="{{ url('Pegawai', $data->id)}}" class="btn btn-primary">Lihat</a></center></td>
			<td><center><a href="{{ route('Pegawai.edit', $data->id)}}" class="btn btn-warning">Ubah</a></center></td>
			<td><center>
				{!! Form::open(['method'=> 'DELETE', 'route' => ['Pegawai.destroy', $data->id]]) !!}
				{!! Form::submit('Hapus', ['class' =>'btn btn-danger']) !!}
			</center></td>
		</tr>
		@endforeach
	</table>
</div>
</div>
@stop