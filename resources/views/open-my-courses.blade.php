<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="title-center" id="title-center-more-information">
        <h1>Curso Aberto</h1>
    </div>

@stop

@section('content')

    @foreach ($courses as $course)
        <div class="row">
            <div class="col-12 col-lg-8" id="colum-background-white">
                <div class="row">
                    <div class="col-sm" id="informations-open-my-courses">
                        <h5>{{ $course->name }}</h5>
                        <p>{{ $course->description }}</p>
                    </div>
                    <div class="col-sm">
                        <img src="/img/cursos/{{ $course->image }}" id="image-open-my-courses" alt="Imagem de Capa do Curso">
                    </div>
                </div>

            </div>
        </div>
    @endforeach

    <h5 style="margin-bottom: 10px">Lista de Aulas</h5>
    @foreach ($videos as $videos)
        <div class="col-12 col-lg-8 clasroom">
            <div class="small-box ">
                <div class="inner card-info-courses bg-transparent text-dark" id="">
                    <h6><strong>{{ $videos->title }}</strong></h6>
                    <p>{{ $videos->description }}</p>
                </div>
                <a href="{{ route('player.index', $videos->id) }}" class="small-box-footer bg-primary">Assistir <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    @endforeach


@stop


@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
