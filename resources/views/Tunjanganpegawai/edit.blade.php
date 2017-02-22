@extends('layouts.app2')
@section('content')
<div class="container">
<div class="panel panel-warning">
<div class="panel-heading"><h3><b>Ubah Tunjangan Pegawai</b></h3></div>
<div class="panel-body">
	{!! Form::model($tunpeg, ['method' => 'PATCH', 'route' => ['Tunjanganpegawai.update', $tunpeg->id]]) !!}
	<div class="form-group">
		{!! Form::label('Kode Tunjangan', 'Kode Tunjangan : ') !!}
		<select class="form-control" name="Kode_tunjangan_id"> 
		@foreach ($tunjangan as $data)
		<option value="{{$data->id}}">{{$data->Kode_tunjangan}}</option>
		@endforeach
	</select>
	</div>

	<div class="form-group">
		{!! Form::label('Nama ', 'Nama : ') !!}
		<select class="form-control" name="Pegawai_id"> 
		@foreach ($pegawai as $data)
		<option value="{{$data->id}}">{{$data->users->name}}</option>
		@endforeach
	</select>
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
