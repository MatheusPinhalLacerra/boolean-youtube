@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Meus vídeos</h1>
@stop

@section('content')
<iframe width="560" height="315" src="https://www.youtube.com/embed/maKcQf0SB40" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
