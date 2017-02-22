@extends('layouts.app2')
@section('content')
<div class="container">
<div class="panel panel-warning">
<div class="panel-heading"><h3><b>Ubah Kategori Lembur</b></h3></div>
<div class="panel-body">
	{!! Form::model($katlem, ['method' => 'PATCH', 'route' => ['Kategorilembur.update', $katlem->id]]) !!}
	<div class="form-group">
		{!! Form::label('Kode Lembur', 'Kode Lembur :') !!}
		{!! Form::text ('Kode_lembur', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Nama Jabatan', 'Nama Jabatan : ') !!}
		<select class="form-control" name="Jabatan_id"> 
		@foreach ($jab as $data)
		<option value="{{$data->id}}">{{$data->Nama_jabatan}}</option>
		@endforeach
	</select>
	</div>
	<div class="form-group">
		{!! Form::label('Nama Golongan', 'Nama Golongan : ') !!}
		<select class="form-control" name="Golongan_id"> 
		@foreach ($gol as $data)
		<option value="{{$data->id}}">{{$data->Nama_golongan}}</option>
		@endforeach
	</select>
	</div>
	<div class="form-group">
		{!! Form::label('Besaran Uang', 'Besaran Uang :') !!}
		{!! Form::text ('Besaran_uang', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Ubah', ['class' => 'btn btn-warning']) !!}
	</div>
	{!! Form::close() !!}
</div>
</div>
</div>
</div>


@stop
