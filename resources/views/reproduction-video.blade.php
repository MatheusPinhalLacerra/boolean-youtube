<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b> {{$video->title}} </b></h1>
@stop

@section('content')


    <div class="row row-reproduction">
        <div class="col-sm embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://www.youtube.com/embed/{{ $video->token_youtube }}" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="col-12 col-sm-3" id="div-list-reproduction" style="">
            <ul style="width: 100%">
                <a href="#">
                    <li class="bg-dark">
                        <p>Video Aula 1</p>
                    </li>
                </a>

                <a href="#">
                    <li class="bg-dark">
                        <p>Video Aula 1</p>
                    </li>
                </a>

   
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
