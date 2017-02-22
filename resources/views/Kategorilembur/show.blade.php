@extends('layouts.app2')
@section('content')

<div class="container">
<div class="panel panel-primary">
<div class="panel-heading"><h3><b>Show Kategori Lembur</b></h3></div>
<div class="panel-body">

<div class="form-group">

	{!! Form::label('Kode Lembur', 'Kode Lembur :') !!}
	<input type="text" name="Kode_jabatan" class="form-control" placeholder="{{ $katlem->Kode_lembur}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('Nama Jabatan', 'Nama Jabatan :') !!}
	<input type="text" name="Nama_jabatan" class="form-control" placeholder="{{ $katlem->jabatans->Nama_jabatan}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('Nama Golongan', 'Nama Golongan :') !!}
	<input type="text" name="Nama_golongan" class="form-control" placeholder="{{ $katlem->golongans->Nama_golongan}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('Besaran Uang', 'Besaran Uang :') !!}
	<input type="text" name="Nama_jabatan" class="form-control" placeholder="Rp. {{number_format($katlem->Besaran_uang)}}" readonly>
</div>



<div class="form-group">
<div class="col-sm-4">
	<a href="{{ route('Kategorilembur.index')}}" class="btn btn-primary">Kembali</a>
</div>
</div>

</div>
</div>
</div>
</div>
@stop