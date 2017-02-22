@extends('layouts.app2')
@section('content')

<div class="container">
<div class="panel panel-primary">
<div class="panel-heading"><h3><b>Show Golongan</b></h3></div>
<div class="panel-body">

<div class="form-group">

	{!! Form::label('Kode Golongan', 'Kode Golongan :') !!}
	<input type="text" name="Kode_jabatan" class="form-control" placeholder="{{ $gol->Kode_golongan}}" readonly>
</div>


<div class="form-group">
	{!! Form::label('Nama Golongan', 'Nama Golongan :') !!}
	<input type="text" name="Nama_golongan" class="form-control" placeholder="{{ $gol->Nama_golongan}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('Besaran Uang', 'Besaran Uang :') !!}
	<input type="text" name="Nama_jabatan" class="form-control" placeholder="Rp. {{number_format($gol->Besaran_uang)}}" readonly>
</div>



<div class="form-group">
<div class="col-sm-4">
	<a href="{{ route('Golongan.index')}}" class="btn btn-primary">Kembali</a>
</div>
</div>

</div>
</div>
</div>
</div>
@stop