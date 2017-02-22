@extends('layouts.app2')
@section('content')

<div class="container-fluid">
	<h1>Data Penggajian</h1>
	<br>
	<a href="{{ url('/Penggajian/create')}}" class="btn btn-primary">Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="info">
			<th><center>No</center></th>
			<th><center>Kode Tunjangan Pegawai</center></th>
			<th><center>Jumlah Jam Lembur</center></th>
			<th><center>Jumlah Uang Lembur</center></th>
			<th><center>Gaji Pokok</center></th>
			<th><center>Total Gaji</center></th>
			<th><center>Tanggal Pengembalian</center></th>
			<th><center>Status Pengembalian</center></th>
			<th><center>Petugas Penerima</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		@foreach ($penggajian as $data)
		<tr>
			<td><center>{{ $no++ }}</center></td>
			<td><center>{{ $data->tunjangan_pegawais->Kode_tunjangan}}</center></td>
			<td><center>{{ $data->Jumlah_jam_lembur}}</center></td>
			<td><center>Rp. {{ number_format($data->Jumlah_uang_lembur)}}</center></td>
			<td><center>Rp. {{ number_format($data->Gaji_pokok)}}</center></td>
			<td><center>Rp. {{ number_format($data->Total_gaji)}}</center></td>
			<td><center>{{ $data->Tanggal_pengembalian = $data->updated_at}}</center></td>
			<td><center>{{ $data->Status_pengembalian}}</center></td>
			<td><center>{{ $data->Petugas_penerima}}</center></td>
			<td><center><a href="{{ url('Penggajian', $data->id)}}" class="btn btn-primary">Lihat</a></center></td>
			<td><center><a href="{{ route('Penggajian.edit', $data->id)}}" class="btn btn-danger">Ubah</a></center></td>
			<td><center>
				{!! Form::open(['method'=> 'DELETE', 'route' => ['Pegawai.destroy', $data->id]]) !!}
				{!! Form::submit('Hapus', ['class' =>'btn btn-success']) !!}
			</center></td>
		</tr>
		@endforeach
	</table>
</div>
</div>
@stop