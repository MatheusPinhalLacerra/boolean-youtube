<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cursos Disponíveis</h1>
@stop

@section('content')


    <div class="row">
        @foreach ($courses as $course)
            {{-- <div class="col-lg-3 col-6">
                <div class="small-box bg-info">

                    <div class="card-img" id="">
                        <img src="/img/cursos/{{ $curso->image }}" alt="Capa do curso">
                    </div>

                    <div class="inner card-info-courses" id="">
                        <h6><strong>{{ $curso->name }}</strong></h6>
                        <p>{{ $curso->description }}</p>
                    </div>
                    <a href="{{ route('more-informations.index', $curso->id) }}" class="small-box-footer">Mais Informações
                        <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div> --}}

            <div class="card" style="width: 18rem; margin: 0 5px">
                <img class="card-img-top" src="/img/cursos/{{ $course->image }}" alt="Imagem de capa">
                <div class="card-body">
                    <h5 class="card-title"><b>{{$course->name}}</b></h5>
                    <p class="card-text">{{$course->description}}</p>
                    <a href="{{ route('more-informations.index', $course->id)}}" class="btn btn-primary">Mais Informações</a>
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
