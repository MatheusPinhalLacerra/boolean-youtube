<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b> {{$video->title}} </b></h1>
@stop

@section('content')



    <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$video->token_youtube}}"
      frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
            <br>
            <br>
            <h1><b> {{$video->description}} </b></h1>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
