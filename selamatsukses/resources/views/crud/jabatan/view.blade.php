<?php $page = 'ID Jabatan '.$data->id ?>
<?php $root = 'jabatan' ?>
@extends('layouts.app')

@section('footer')
<a href="{{url($root)}}">Jabatan</a> > <a href="{{url($root,$data->id)}}">{{$data->nama_jabatan}}</a>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$page}}</div>

                <div class="panel-body">
                	<table class="table">
                		<tr>
                			<td>{!! Form::label('Kode') !!}</td>
                			<td>
                			<div class="form-group">
                			{!! Form::label('kode_jabatan',$data->kode_jabatan,['class'=>'form-control']) !!}
                			</div>
                        </td>
                		</tr>
                		<tr>
                			<td>{!! Form::label('Nama') !!}</td>
                			<td>
                			<div class="form-group">
                			{!! Form::label('nama_jabatan',$data->nama_jabatan,['class'=>'form-control']) !!}
                			</div>
                        	</td>
                		</tr>
                		<tr>
                			<td>{!! Form::label('Tunjangan Uang') !!}</td>
                			<td>
                			<div class="form-group">
                			<div class="input-group">
								<span class="input-group-addon">Rp.</span>
                                <?php $data->tunjangan_uang = number_format($data->tunjangan_uang,0,',','.'); ?>
								{!! Form::label('tunjangan_uang',$data->tunjangan_uang,['class'=>'form-control','id'=>'appendprepend']) !!}
								<span class="input-group-addon">.00</span>
							</div>
                			</div>
							</td>
                		</tr>
                        <tr>
                            <td colspan="9" align="center">
                                {!! Form::open(['method'=> 'DELETE', 'route'=>['jabatan.destroy',$data->id]]) !!}
                                <a href="{{route('jabatan.edit',$data->id)}}" class="btn btn-warning" style="width: 49%;">Edit</a>
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger','style'=>'width:49%;']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
