@extends('layouts.app2')
@section('content')

<div class="container">
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-primary">
<div class="panel-heading"><h3><b>Show Tunjangan Pegawai</b></h3></div>
<div class="panel-body">


<center><img src="{{asset('/assets/image/'.$tunpeg->pegawais->Photo)}}" height="200" width="200"></center>

<div class="form-group">
	{!! Form::label('Kode Tunjangan', 'Kode Tunjangan :') !!}
	<input type="text" name="Kode_tunjangan_id" class="form-control" placeholder="{{ $tunpeg->tunjangans->Kode_tunjangan}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('Nama Pegawai', 'Nama Pegawai :') !!}
	<input type="text" name="Pegawai_id" class="form-control" placeholder="{{ $tunpeg->pegawais->users->name}}" readonly>
</div>

<div class="form-group">
<div class="col-sm-4">
	<a href="{{ route('Tunjanganpegawai.index')}}" class="btn btn-primary">Kembali</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@stop