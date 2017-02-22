@extends('layouts.app2')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
	<h1>Data Kategori Lembur</h1>
	<br>
	<a href="{{ url('/Kategorilembur/create')}}" class="btn btn-primary">Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="info">
			<th><center>No</center></th>
			<th><center>Kode Lembur</center></th>
			<th><center>Nama Jabatan</center></th>
			<th><center>Nama Golongan</center></th>
			<th><center>Besaran Uang</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		@foreach ($katlem as $data)
		<tr>
			<td><center>{{ $no++ }}</center></td>
			<td><center>{{ $data->Kode_lembur}}</center></td>
			<td><center>{{ $data->jabatans->Nama_jabatan}}</center></td>
			<td><center>{{ $data->golongans->Nama_golongan}}</center></td>
			<td><center>Rp. {{number_format($data->Besaran_uang)}}</center></td>
			<td><center><a href="{{ url('Kategorilembur', $data->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></center></td>
			<td><center><a href="{{ route('Kategorilembur.edit', $data->id)}}" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a></center></td>
			<td><center>
				{!! Form::open(['method'=> 'DELETE', 'route' => ['Jabatan.destroy', $data->id]]) !!}
				<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
			</center></td>
		</tr>
		@endforeach
	</table>
</div>
</div>
@stop