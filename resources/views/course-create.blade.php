@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Criar Curso</h1>
@stop

@section('content')

    <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data" style="width: 100%">
        @csrf
        {{-- <label for="titulo-video">Nome do Curso (obrigatório)</label> --}}
        <div style="margin-bottom: 20px">
            <label for="curso">Curso:</label>
            <input type="text" class="form-control col-6" id="curso"  name="name" placeholder="Nome do Curso">
        </div>
        
        <div style="margin-bottom: 20px">
        <label for="descricao">Descrição:</label>
        <input type="text" class="form-control col-6" id="descricao" name="description" placeholder="Descrição do Curso">
        </div>

        <div style="margin-bottom: 20px">
        <label for="imagem">Imagem de Capa:</label>
        <input type="file" name="image" id="imagem">
        </div>
        <p><button type="submit" class="btn btn-primary" name="submit">Cadastrar Curso</button></p>
    </form>

@stop

@section('css')

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
