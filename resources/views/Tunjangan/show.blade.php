@extends('layouts.app2')
@section('content')

<div class="container">
<div class="panel panel-primary">
<div class="panel-heading"><h3><b>Show Tunjangan</b></h3></div>
<div class="panel-body">

<div class="form-group">
	{!! Form::label('Kode Tunjangan', 'Kode Tunjangan :') !!}
	<input type="text" name="Kode_tunjangan" class="form-control" placeholder="{{ $tunjangan->Kode_tunjangan}}" readonly>
</div>


<div class="form-group">
	{!! Form::label('Nama Jabatan', 'Nama Jabatan :') !!}
	<input type="text" name="Jabatan_id" class="form-control" placeholder="{{ $tunjangan->jabatans->Nama_jabatan}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('Nama Golongan', 'Nama Golongan :') !!}
	<input type="text" name="Golongan_id" class="form-control" placeholder="{{ $tunjangan->golongans->Nama_golongan}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('Status', 'Status :') !!}
	<input type="text" name="Status" class="form-control" placeholder="{{ $tunjangan->Status}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('Jumlah Anak', 'Jumlah Anak :') !!}
	<input type="text" name="Jumlah_anak" class="form-control" placeholder="{{ $tunjangan->Jumlah_anak}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('Besaran Uang', 'Besaran Uang :') !!}
	<input type="text" name="Besaran_uang" class="form-control" placeholder="{{ $tunjangan->Besaran_uang}}" readonly>
</div>

<div class="form-group">
<div class="col-sm-4">
	<a href="{{ route('Tunjangan.index')}}" class="btn btn-primary">Kembali</a>
</div>
</div>

</div>
</div>
</div>
</div>
@stop