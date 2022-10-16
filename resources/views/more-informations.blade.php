<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="title-center" id="title-center-more-information">
        <h1>Mais informações</h1>
    </div>

@stop

@section('content')

    @foreach ($courses as $course)
        <form action="{{ route('more-informations.store', $course->id) }}" method="POST" enctype="multipart/form-data"
            style="width: 100%">
            @csrf
            <div class="row">
                <div class="col-12 colum-more-information" id="colum-background-white">
                    <div class="row">
                        <div class="col-12 col-lg-8" id="informations-more-informations">
                            <h5>{{ $course->name }}</h5>
                            <p>{{ $course->description }}</p>
                        </div>
                        <div class="col-12 col-lg-4" id="div-img-more-informations">
                            <img src="/img/cursos/{{ $course->image }}" id="img-more-informations"
                                alt="Imagem de Capa do Curso">
                        </div>

                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Registre-se</button>
            </div>
    @endforeach


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
