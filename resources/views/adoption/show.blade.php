@extends('layout')

@section('content')
    <div class="panel-heading">
        <h1> Cats for adoption</h1>
        @foreach($cats as $cat)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $cat['name'] }}</h3>
                </div>
                <div class="panel-body">
                    {{ $cat['race'] }}
                    <br>
                    {{ $cat['description'] }}
                    <br>
                    <img src="{{ $cat['photo'] }}" width="30%">
                    <br>
                </div>
            </div>
        @endforeach

        {{ $cats->links() }}
    </div>
@endsection