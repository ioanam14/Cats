@extends('layout')

@section('content')
    <div class="panel-heading">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $cat['name'] }}</h3>
            </div>
            <div class="panel-body">
                Race: {{ $cat['race'] }}
                <br>
                <img src="{{ $cat['photo'] }}" width="30%">
                <br>
            </div>
        </div>
    </div>
@endsection