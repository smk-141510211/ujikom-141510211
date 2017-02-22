@extends('layouts.app2')
@section('content')

<div class="container">
<div class="panel panel-info">
<div class="panel-heading"><h3><b>Tambah Penggajian</b></h3></div>
	<div class="panel-body">
	{!! Form::open(['url' => '/Penggajian']) !!}

	<div class="form-group">
		{!! Form::label('Nama Pegawai', 'Nama Pegawai: ') !!}
		<select class="form-control" name="Pegawai_id"> 
		@foreach ($pegawai as $data)
		<option value="{{$data->id}}">{{$data->users->name}}</option>
		@endforeach
	</select>
	</div>

	<div class="form-group">
		{!! Form::label('Kode Tunjangan Pegawai', 'Kode Tunjangan Pegawai :') !!}
		<input type="text" name="Tunjangan_pegawai_id" class="form-control" placeholder="{{ $data->Kode_tunjangan}}" readonly>
	</div>

	<div class="form-group">
		{!! Form::label('Jumlah Jam Lembur', 'Jumlah Jam Lembur :') !!}
		<input type="text" name="Jumlah_jam_lembur" class="form-control" placeholder="{{ $data->Jumlah_jam_lembur}}" readonly>
	</div>
	<div class="form-group">
		{!! Form::label('Jumlah Uang Lembur', 'Jumlah Uang Lembur :') !!}
		<input type="text" name="Jumlah_uang_lembur" class="form-control" placeholder="{{ $data->Jumlah_uang_lembur}}" readonly>
	</div>
	<div class="form-group"> 
		{!! Form::label('Gaji Pokok', 'Gaji Pokok :') !!}
		<input type="text" name="Gaji_pokok" class="form-control" placeholder="{{ $data->Gaji_pokok}}" readonly>
	</div>
	<div class="form-group">
		{!! Form::label('Total Gaji', 'Total Gaji :') !!}
		<input type="text" name="Total_gaji" class="form-control" placeholder="{{ $data->Total_gaji}}" readonly>
	</div>
	<div class="form-group">
		{!! Form::label('Tanggal Pengambilan', 'Tanggal Pengambilan :') !!}
		<input type="text" name="Tanggal_pengambilan" class="form-control" placeholder="{{ $data->updated_at}}" readonly>
	</div>

	<div class="form-group">
	<label>Status Pengambilan
		<select type="text" class="form-control" name="Status_pengembalian" required>
			<option>Sudah Diambil</option>
			<option>Belum Diambil</option>
		</select>
		</label>
	</div>
	<div class="form-group">
		{!! Form::label('Petugas Penerima', 'Petugas Penerima :') !!}
		{!! Form::text('Petugas_penerima', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}	
	{!! Form::close() !!}
	</div>
	
</div>
</div>
</div>

@stop