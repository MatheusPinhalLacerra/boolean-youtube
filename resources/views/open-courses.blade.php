@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Curso Aberto</h1>
@stop

@section('content')

    @foreach ($courses as $course)
        <div class="background-open-course">
            <h5>{{ $course->name }}</h5>
            <p>{{ $course->description }}</p>
            <div style="max-height: 180px; overflow: clip; margin-bottom: 30px">
                <img id="img-open-course" class="d-block" src="/img/cursos/{{ $course->image }}" alt="Imagem Capa">
            </div>
            
            <a href="{{ route('video.create', $course->id) }}"><button class="btn btn-primary">Enviar Vídeo</button></a>
            <a href="{{ route('edit-course.edit', $course->id) }}"><button class="btn btn-primary">Editar Curso</button></a>
        </div>
    @endforeach


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/styles.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
