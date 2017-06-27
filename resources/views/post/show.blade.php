@extends('layout')

@section('content')
    <div class="panel-heading">
        <h1> Posts about cats</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $post['title']}}</h3>
            </div>
            <div class="panel-body">
                {{ $post['content'] }}
            </div>
        </div>
    </div>
@endsection