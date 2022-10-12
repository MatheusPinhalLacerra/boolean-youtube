<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page')

@section('title', 'Enviar Vídeo')

@section('content_header')
    <h1>Meus Cursos</h1>
@stop

@section('content')
    <div class="row">
        @foreach ($my_courses as $courses)
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">

                    <div class="card-img" id="">
                        <img src="/img/cursos/{{ $courses->image }}" alt="Capa do curso">
                    </div>

                    <div class="inner card-info-courses" id="">
                        <h6><strong>{{ $courses->name }}</strong></h6>
                        <p>{{ $courses->description }}</p>
                    </div>
                    <a href="{{ route('open-my-courses.index', $courses->id) }}" class="small-box-footer">Abrir Curso <i
                            class="fas fa-arrow-circle-right"></i></a>
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
