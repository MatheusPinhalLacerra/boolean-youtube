<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="title-center">
        <h1>Cursos Disponíveis</h1>
    </div>

@stop

@section('content')


    <div class="row row-card">
        @foreach ($courses as $course)
            <div class="card card-container" style="margin-right: 20px">

                <img class="card-img-top" src="/img/cursos/{{ $course->image }}" alt="Imagem de capa">


                <div class="card-body">
                    <div class="card-name">
                        <h5 class="card-title"><b>{{ $course->name }}</b></h5>
                    </div>

                    {{-- <div class="card-description">
                        <p class="card-text">{{$course->description}}</p>
                    </div> --}}


                    <a href="{{ route('more-informations.index', $course->id) }}" class="btn btn-primary">Mais
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
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
