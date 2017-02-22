@extends('layouts.app2')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
<div class="panel panel-warning">
<div class="panel-heading"><h3><b>Ubah Jabatan</b></h3></div>
<div class="panel-body">
	{!! Form::model($jab, ['method' => 'PATCH', 'route' => ['Jabatan.update', $jab->id]]) !!}
	<div class="form-group">
		{!! Form::label('Kode Jabatan', 'Kode Jabatan :') !!}
		{!! Form::text ('Kode_jabatan', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Nama Jabatan', 'Nama Jabatan :') !!}
		{!! Form::text ('Nama_jabatan', null, ['class' => 'form-control']) !!}
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
