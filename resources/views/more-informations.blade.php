<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page') 

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mais informações</h1>
@stop

@section('content')

@foreach ($courses as $course)
<form action="{{route ('more-informations.store', $course->id)}}" method="POST" enctype="multipart/form-data" style="width: 100%">
        @csrf
    <h1>{{$course->name}}</h1>
    <p>{{$course->description}}</p>
    <img src="/img/cursos/{{ $course->image }}" alt="" style="width: 150px">
    <button type="submit" class="btn btn-primary" name="submit">Registre-se</button>
    
@endforeach
    


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
