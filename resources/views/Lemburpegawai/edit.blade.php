@extends('layouts.app2')
@section('content')
<div class="container">
<div class="panel panel-warning">
<div class="panel-heading"><h3><b>Ubah Lembur Pegawai</b></h3></div>
<div class="panel-body">
	{!! Form::model($lembur, ['method' => 'PATCH', 'route' => ['Lemburpegawai.update', $lembur->id]]) !!}
	<div class="form-group">
		{!! Form::label('Kode Lembur', 'Nama Lembur : ') !!}
		<select class="form-control" name="Kode_lembur_id"> 
		@foreach ($katlem as $data)
		<option value="{{$data->id}}">{{$data->Kode_lembur}}</option>
		@endforeach
	</select>
	</div>

	<div class="form-group">
		{!! Form::label('Nama Pegawai', 'Nama Pegawai : ') !!}
		<select class="form-control" name="Pegawai_id"> 
		@foreach ($pegawai as $data)
		<option value="{{$data->id}}">{{$data->users->name}}</option>
		@endforeach
	</select>
	</div>

	<div class="form-group">
		{!! Form::label('Jumlah Jam', 'Jumlah Jam :') !!}
		{!! Form::text ('Jumlah_jam', null, ['class' => 'form-control']) !!}
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
