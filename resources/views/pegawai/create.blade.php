@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">Daftar Pegawai</div>
                <div class="panel-body">

                        {!! Form::open(['url' => '\Pegawai', 'enctype' => 'multipart/form-data', 'files' => true]) !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('permission') ? ' has-error' : '' }}">
                            <label for="permission" class="col-md-4 control-label">Permission</label>

                            <div class="col-md-6">
                                <select id="permission" type="text" class="form-control" name="permission" required>
                                    <option value="Admin">Admin</option>
                                    <option value="Pegawai">Pegawai</option>
                                    <option value="HRD">HRD</option>
                                    <option value="Bendahara">Bendahara</option>
                                </select> 

                                @if ($errors->has('permission'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('permission') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>

                            <div class="container">
                            <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-info">
                             <div class="panel-heading">Pegawai</div>
                                <div class="panel-body">

                           <div class="form-group">
                            <label for="Nip" class="col-md-4 control-label">NIP</label>

                            <div class="col-md-6">
                                <input id="Nip" type="text" class="form-control" name="Nip" required>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('Jabatan_id') ? ' has-error' : '' }}">
                            <label for="Jabatan_id" class="col-md-4 control-label">Jabatan</label>

                            <div class="col-md-6">
                    
                                @if ($errors->has('Jabatan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Jabatan_id') }}</strong>
                                    </span>
                                @endif 
                                <select class="form-control" name="Jabatan_id">
                                    @foreach($jab as $data)
                                    <option value="{{ $data->id}}">{{$data->Nama_jabatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('Golongan_id') ? ' has-error' : '' }}">
                            <label for="Golongan_id" class="col-md-4 control-label">Golongan</label>

                            <div class="col-md-6">
                    
                                @if ($errors->has('Golongan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Golongan_id') }}</strong>
                                    </span>
                                @endif 
                                <select class="form-control" name="Golongan_id">
                                    @foreach($gol as $data)
                                    <option value="{{ $data->id}}">{{$data->Nama_golongan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="Photo" class="col-md-4 control-label">Photo</label>

                            <div class="col-md-6">
                                <input id="Photo" type="file" class="form-control" name="Photo" required>
                            </div>
                        </div>


                        <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                         {!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}  
                         {!! Form::close() !!}
                            </div>
                            </div>
                    </form>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
