<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page') 

@section('title', 'Dashboard')

@section('content_header')
    <h1>Curso Aberto</h1>
@stop

@section('content')

@foreach ($courses as $course)
    <h1>{{$course->name}}</h1>
    <p>{{$course->description}}</p>
    <img src="/img/cursos/{{ $course->image }}" alt="" style="width: 150px">
@endforeach

    <a href="{{route('video.create', $course->id)}}"><button>Enviar Video</button></a>
    <a href="{{route('edit-course.edit', $course->id)}}"><button>Editar Curso</button></a>
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
