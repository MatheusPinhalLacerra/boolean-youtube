<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page') 

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cursos<b> Disponíveis</b></h1>
@stop

@section('content')

    <div class="row">
        @foreach ($registered_courses as $registered)
          
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">

                    <div class="card-img" id="">
                        <img src="/img/cursos/{{ $registered->image }}" alt="Capa do curso">
                    </div>

                    <div class="inner card-info-courses" id="">
                        <h6><strong>{{ $registered->name }}</strong></h6>
                        <p>{{ $registered->description }}</p>
                    </div>
                    <a href="{{route('open-courses.index', $registered->id)}}" class="small-box-footer">Abrir Curso <i class="fas fa-arrow-circle-right"></i></a>
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
