@extends('layouts.app2')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
	<h1>Data Jabatan</h1>
	<br>
	<a href="{{ url('/Jabatan/create')}}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i>&nbsp;Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="info">
			<th><center>No</center></th>
			<th><center>Kode Jabatan</center></th>
			<th><center>Nama Jabatan</center></th>
			<th><center>Besaran Uang</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		@foreach ($jab as $data)
		<tr>
			<td><center>{{ $no++ }}</center></td>
			<td><center>{{ $data->Kode_jabatan}}</center></td>
			<td><center>{{ $data->Nama_jabatan}}</center></td>
			<td><center>Rp. {{number_format($data->Besaran_uang)}}</center></td>
			<td><center><a href="{{ url('Jabatan', $data->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></center></td>
			<td><center><a href="{{ route('Jabatan.edit', $data->id)}}" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a></center></td>
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