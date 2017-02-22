@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><b>Selamat Datang</b></div>

                <div class="panel-body">
                    <span class="name">Selamat Datang</span>
                    <span><b>{{ Auth::user()->name}}</b>, Anda Login sebagai <b>{{ Auth::user()->permission }}</b></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
