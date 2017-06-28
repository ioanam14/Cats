@extends('layout')

@section('content')
    {{ Form::open(['url' => '/adoption/add']) }}
    <legend>Add a cat for adoption</legend>
    {{Form::label('name', 'Cats name')}}
    <br>
    {{ Form::text('name', null, array('placeholder'=>'Pookie', 'class' => 'form')) }}
    <br>
    {{Form::label('race', 'Cats race')}}
    <br>
    {{ Form::text('race', null, array('placeholder'=>'British Munchkin', 'class' => 'form')) }}
    <br>
    {{Form::label('description', 'Description of cat')}}
    <br>
    {{ Form::textarea('description', null, array('placeholder'=>'Pookie is a lovely cat!', 'class' => 'form')) }}
    <br>
    {{Form::label('photo', 'A photo URL')}}
    <br>
    {{ Form::text('photo', null, array('placeholder'=>'http://assets6.heart.co.uk/2017/09/pooky-the-munchkin-2-1488301236-large-article-0.png', 'class' => 'form')) }}
    <br>
    {{ Form::submit('Add cat!') }}
    {{ Form::close() }}
@endsection