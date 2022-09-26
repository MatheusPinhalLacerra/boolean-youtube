@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Criar Curso</h1>
@stop

@section('content')

    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data" style="width: 100%">
        @csrf
        {{-- <label for="titulo-video">Nome do Curso (obrigatório)</label> --}}
        <div style="margin-bottom: 20px">
            <label for="curso">Curso:</label>
            <input type="text" class="form-control col-6" id="curso" name="name" placeholder="Nome do Curso" required="required">
        </div>

        <div style="margin-bottom: 20px">
            <label for="descricao">Descrição:</label>
            <textarea name="description" id="descricao" cols="30" rows="5" class="form-control col-6" required="required"></textarea>
            {{-- <input type="text" class="form-control col-6" id="descricao" name="description" placeholder="Descrição do Curso"> --}}
        </div>

        <div>
            <label for="Área do curso">Área do curso:</label>
            <select class="form-control col-6" name="course_areas_id" id="category" required="required">
                <option hidden>Selecione a Área do curso</option>
                @foreach ($area_course as $area)
                    <option value="{{ $area->id }}">{{$area->name_area}}</option>
                @endforeach
            </select>

        </div>

        <div style="margin-bottom: 20px">
            <label for="curso">Nome do Instrutor:</label>
            <input type="text" class="form-control col-6" id="instructor_name" name="instructor_name" placeholder="Nome do Instrutor" required="required">
        </div>

        <div style="margin: 30px 0%">
            <label for="imagem">Imagem de Capa:</label>
            <input type="file" name="image" id="imagem" required="required">
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
