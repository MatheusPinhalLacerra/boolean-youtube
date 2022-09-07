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
        @foreach ($courses as $curso)
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                
                <div class="card-img" id="">
                    <img src="/img/cursos/{{ $curso->image }}" alt="Capa do curso">
                </div>

                <div class="inner card-info-courses" id="">
                    <h6><strong>{{ $curso->name }}</strong></h6>
                    <p>{{ $curso->description }}</p>
                </div>
                <a href="{{route('more-informations.index', $curso->id)}}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
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
