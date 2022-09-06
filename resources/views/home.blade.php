<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cursos Disponíveis</h1>
@stop

@section('content')

    {{-- @foreach ($courses as $curso)
        <div class="col-3" id="teste">
            <div class="row" style="border: 1px solid blue">
                <div>
                    <img src="/img/cursos/{{ $curso->image }}" alt="Capa do curso">
                </div>
            </div>
            <div class="row" style="border: 1px solid pink">
                <div>
                    <h3><strong>{{ $curso->name }}</strong></h3>
                    <p>{{ $curso->description }}</p>
                </div>
            </div>
        </div>
    @endforeach --}}

   
    <div class="row">
        @foreach ($courses as $curso)
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="d-flex flex-column align-items-center text-center" id="card-img">
                    {{-- <p>Course Image</p> --}}
                    {{-- <img src="/img/cursos/{{ $curso->image }}" alt="Capa do curso"> --}}
                </div>
                <div class="inner" id="card-info-courses">
                    <h5><strong>{{ $curso->name }}</strong></h5>
                    <p>{{ $curso->description }}</p>
                </div>
                <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
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
