@extends('layouts.app2')
@section('content')

<div class="container">
<div class="panel panel-primary">
<div class="panel-heading"><h3><b>Show Lembur Pegawai</b></h3></div>
<div class="panel-body">

<div class="form-group">

	{!! Form::label('Kode Lembur', 'Kode Lembur :') !!}
	<input type="text" name="Kode_lembur_id" class="form-control" placeholder="{{ $lembur->kategori_lemburs->Kode_lembur}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('NIP', 'NIP :') !!}
	<input type="text" name="Pegawai_id" class="form-control" placeholder="{{ $lembur->pegawais->Nip}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('Nama Pegawai', 'Nama Pegawai :') !!}
	<input type="text" name="Pegawai_id" class="form-control" placeholder="{{ $lembur->pegawais->users->name}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('Jumlah Jam', 'Jumlah Jam :') !!}
	<input type="text" name="Jumlah_jam" class="form-control" placeholder="{{ $lembur->Jumlah_jam}}" readonly>
</div>

<div class="form-group">
	{!! Form::label('Besaran Uang', 'Besaran Uang :') !!}
	<input type="text" name="Besaran_uang" class="form-control" placeholder="Rp. {{ number_format($lembur->kategori_lemburs->Besaran_uang * $lembur->Jumlah_jam)}}" readonly>
</div>
<div class="form-group">
<div class="col-sm-4">
	<a href="{{ route('Lemburpegawai.index')}}" class="btn btn-primary">Kembali</a>
</div>
</div>

</div>
</div>
</div>
</div>
@stop