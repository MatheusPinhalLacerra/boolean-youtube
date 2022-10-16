<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page')

@section('title', 'Enviar Vídeo')

@section('content_header')
   

    <div class="title-center">
        <h1>Meus Cursos</h1>
    </div>
@stop

@section('content')
    <div class="row row-card">
        @foreach ($my_courses as $courses)

        <div class="card card-container" style="margin-right: 20px">

            <img class="card-img-top" src="/img/cursos/{{ $courses->image }}" alt="Imagem de capa">


            <div class="card-body">
                <div class="card-name">
                    <h5 class="card-title"><b>{{ $courses->name }}</b></h5>
                </div>

                {{-- <div class="card-description">
                    <p class="card-text">{{$course->description}}</p>
                </div> --}}


                <a href="{{ route('open-my-courses.index', $courses->id) }}" class="btn btn-primary">Mais
                    Informações</a>


            </div>
        </div>
        @endforeach
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
    <script></script>
@stop
