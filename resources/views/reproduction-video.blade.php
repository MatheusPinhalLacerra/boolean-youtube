@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="title-center">
    <h1>{{ $video->title }}</h1>
</div>
    
@stop

@section('content')


    <div class="row row-reproduction">
        <div class="col-sm embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" id="video"
                src="https://www.youtube.com/embed/{{ $video->token_youtube }}" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="col-12 col-sm-3" id="div-list-reproduction" style="">
            <ul style="width: 100%">
                @foreach ($videos as $videosAll)
                    <a href="{{ route('player.index', $videosAll->id) }}">
                        <li class="bg-dark">
                            <p>{{ $videosAll->title }}</p>
                        </li>
                    </a>
                @endforeach

            </ul>




        @stop

        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
            <link rel="stylesheet" href="/css/styles.css">
        @stop

        @section('js')
           
        @stop
