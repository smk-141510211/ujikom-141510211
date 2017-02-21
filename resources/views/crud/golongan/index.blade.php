@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-body" align="center">
                	<table class="table table-hover">
                        @if(isset($datas->first()->id))
                        <thead>
                		<tr>
                			<th><a href="{{url('golongan/?sortBy=kode_golongan')}}">Kode</a></th>
                			<th><a href="{{url('golongan/?sortBy=nama_golongan')}}">Nama</a></th>
                			<th colspan="3">Action</th>
                		</tr>
                        </thead>
                        <tbody>
                		@foreach ($datas as $data)
                		<tr>
                			<td>{{$data->kode_golongan}}</td>
                			<td>{{$data->nama_golongan}}</td>
                			
                            <td class="action-web">{!! Form::open(['method'=> 'DELETE', 'route'=>['golongan.destroy',$data->id]]) !!}
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger lebar']) !!}
                            {!! Form::close() !!}</td>
                            <td class="action-mobile dropdown" colspan="3">
                                <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Action <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    
                                    <li><a href="{{route('golongan.edit',$data->id)}}">Edit</a></li>
                                </ul>
                            </td>
                		</tr>
                		@endforeach
                        </tbody>
                        @else
                        <thead>
                            <tr>
                                <td><h1>Not Found</h1></td>
                            </tr>
                        </thead>
                        @endif
                	</table>
                    {{$datas->links()}}
                </div>
            </div>
</div>
@endsection
