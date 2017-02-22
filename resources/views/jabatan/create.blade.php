@extends('layouts.app2')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
<div class="panel panel-info">
<div class="panel-heading"><h3><b>Tambah Data Jabatan</b></h3></div>
	<div class="panel-body">
	{!! Form::open(['url' => '/Jabatan']) !!}

	 <div class="form-group{{ $errors->has('Kode_jabatan') ? ' has-error' : '' }}">
     	<label for="Kode_jabatan">Kode Jabatan</label>
                      
     	<input id="Kode_jabatan" type="text" class="form-control" name="Kode_jabatan" value="{{ old('Kode_jabatan') }}" required autofocus>

        @if ($errors->has('Kode_jabatan'))
      	<span class="help-block">
      		<strong>{{ $errors->first('Kode_jabatan') }}</strong>
      	</span>
      @endif
                            
    </div>

	<div class="form-group{{ $errors->has('Nama_jabatan') ? ' has-error' : '' }}">
     	<label for="Nama_jabatan">Nama Jabatan</label>
                      
     	<input id="Nama_jabatan" type="text" class="form-control" name="Nama_jabatan" value="{{ old('Nama_jabatan') }}" required autofocus>

        @if ($errors->has('Nama_jabatan'))
      	<span class="help-block">
      		<strong>{{ $errors->first('Nama_jabatan') }}</strong>
      	</span>
      @endif
                            
    </div>

	<div class="form-group{{ $errors->has('Besaran_uang') ? ' has-error' : '' }}">
     	<label for="Besaran_uang">Besaran Uang</label>
                      
     	<input id="Besaran_uang" type="text" class="form-control" name="Besaran_uang" value="{{ old('Besaran_uang') }}" required autofocus>

        @if ($errors->has('Besaran_uang'))
      	<span class="help-block">
      		<strong>{{ $errors->first('Besaran_uang') }}</strong>
      	</span>
      @endif
                            
    </div>
	<div class="form-group">
	{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}	
	{!! Form::close() !!}
	</div>
	
</div>
</div>
</div>

@stop