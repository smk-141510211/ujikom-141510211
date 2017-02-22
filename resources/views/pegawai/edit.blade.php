@extends('layouts.app2')
@section('content')
<div class="container">
<div class="panel panel-warning">
<div class="panel-heading"><h3><b>Ubah Pegawai</b></h3></div>
<div class="panel-body">
	{!! Form::model($pegawai, ['method' => 'PATCH', 'route' => ['Pegawai.update', $pegawai->id]]) !!}
	<div class="form-group">
		{!! Form::label('NIP', 'NIP :') !!}
		{!! Form::text ('Nip', null, ['class' => 'form-control']) !!}
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
		{!! Form::label('Photo', 'Photo :') !!}
		{!! Form::file ('Photo', null, ['class' => 'form-control']) !!}
		<br>
		<img src="{{asset('/assets/image/'.$pegawai->Photo)}}" height="100px" width="100px">
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
