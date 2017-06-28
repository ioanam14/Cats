@extends('layout')

@section('content')
    <div class="panel-heading">
        <h1> Posts about cats </h1>
        @foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $post['title'] }}</h3>
                </div>
                <div class="panel-body">
                    {{ $post['content'] }}
                    <br>
                </div>
            </div>
        @endforeach

        {{ $posts->links() }}
    </div>
@endsection