@extends('layouts.app2')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
<div class="panel panel-info">
<div class="panel-heading"><h3><b>Show Jabatan</b></h3></div>
<div class="panel-body">

<div class="form-group">

	{!! Form::label('Kode Jabatan', 'Kode Jabatan :') !!}
	<input type="text" name="Kode_jabatan" class="form-control" placeholder="{{ $jab->Kode_jabatan}}" readonly>
</div>


<div class="form-group">
	{!! Form::label('Nama Jabatan', 'Nama Jabatan :') !!}
	<input type="text" name="Nama_jabatan" class="form-control" placeholder="{{ $jab->Nama_jabatan}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('Besaran Uang', 'Besaran Uang :') !!}
	<input type="text" name="Nama_jabatan" class="form-control" placeholder="Rp. {{number_format($jab->Besaran_uang)}}" readonly>
</div>



<div class="form-group">
<div class="col-sm-4">
	<a href="{{ route('Jabatan.index')}}" class="btn btn-info">Kembali</a>
</div>
</div>

</div>
</div>
</div>
</div>
@stop