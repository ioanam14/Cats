@extends('layout')

@section('content')
    {{ Form::open(['url' => '/post/add']) }}
    <legend>Add a post about cats</legend>
    {{Form::label('title', 'Title for your post')}}
    <br>
    {{ Form::text('title', null, array('placeholder'=>'Pookie', 'class' => 'foo')) }}
    <br>
    {{Form::label('content', 'The content for the post')}}
    <br>
    {{ Form::textarea('content', null, array('placeholder'=>'Pookie is a lovely cat!', 'class' => 'foo')) }}
    <br>
    {{ Form::submit('Add post!') }}
    {{ Form::close() }}
@endsection