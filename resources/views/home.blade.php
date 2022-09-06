<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Boolean Cursos</h1>
@stop

@section('content')

    @foreach ($courses as $curso)
        <div class="info-box bg-info" id="teste">
            <div class="card col-md-3">
                <img src="/img/cursos/{{ $curso->image }}" alt="Capa do curso">
            </div>
            <div class="info-box-content col-9">
                <h3><strong>{{ $curso->name }}</strong></h3>
                <p>{{ $curso->description }}</p>
            </div>
        </div>
    @endforeach


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
