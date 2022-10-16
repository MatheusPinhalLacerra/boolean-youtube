<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page') 

@section('title', 'Dashboard')

@section('content_header')
<div class="title-center">
    <h1>Cursos Registrados</h1>
</div>
    
@stop

@section('content')

    <div class="row row-card">
        @foreach ($registered_courses as $registered)
          
        <div class="card card-container" style="margin-right: 20px">

            <img class="card-img-top" src="/img/cursos/{{ $registered->image }}" alt="Imagem de capa">


            <div class="card-body">
                <div class="card-name">
                    <h5 class="card-title"><b>{{ $registered->name }}</b></h5>
                </div>

                {{-- <div class="card-description">
                    <p class="card-text">{{$course->description}}</p>
                </div> --}}


                <a href="{{ route('more-informations.index', $registered->id) }}" class="btn btn-primary">Mais
                    Informações</a>


            </div>
        </div>


            {{-- <div class="col-lg-3 col-6">
                <div class="small-box bg-info">

                    <div class="card-img" id="">
                        <img src="/img/cursos/{{ $registered->image }}" alt="Capa do curso">
                    </div>

                    <div class="inner card-info-courses" id="">
                        <h6><strong>{{ $registered->name }}</strong></h6>
                        <p>{{ $registered->description }}</p>
                    </div>
                    <p></p>
                    <a href="{{route('open-courses.index', $registered->id)}}" class="small-box-footer">Abrir Curso <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div> --}}
        @endforeach
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
