@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row">
        <div class="title-center col-12 col-lg-4">
            <h1>Criar Curso</h1>
        </div>
    </div>

@stop

@section('content')

    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data" style="width: 100%">
        @csrf
        {{-- <label for="titulo-video">Nome do Curso (obrigatório)</label> --}}

        <div class="course-create-form" style="margin-bottom: 20px">
            <label for="curso">Curso</label>
            <input type="text" class="form-control col-12 col-lg-6" id="curso" name="name" placeholder="Nome do Curso"
                required="required">
        </div>



        <div class="course-create-form" style="margin: 20px 0">
            <label for="curso">Nome do Instrutor:</label>
            <input type="text" class="form-control col-12 col-lg-6" id="instructor_name" name="instructor_name"
                placeholder="Nome do Instrutor" required="required">
        </div>

        <div class="course-create-form">
            <label for="Área do curso">Área do curso:</label>
            <select class="form-control col-12 col-lg-6" name="course_areas_id" id="category" required="required">
                <option hidden>Selecione a Área do curso</option>
                @foreach ($area_course as $area)
                    <option value="{{ $area->id }}">{{ $area->name_area }}</option>
                @endforeach
            </select>

        </div>

        <div class="course-create-form" style="margin: 20px 0">
            <label for="descricao">Descrição</label>
            <textarea name="description" id="descricao" cols="30" rows="5" class="form-control col-12 col-lg-6"
                required="required"></textarea>
            {{-- <input type="text" class="form-control col-6" id="descricao" name="description" placeholder="Descrição do Curso"> --}}
        </div>

        <div style="margin: 30px 0%">
            <p>Imagem de Capa</p> 
            <label for="imagem" class="col-12" style=""></label>
            <input type="file" name="image" id="imagem" required="required">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Cadastrar Curso</button>
    </form>


@stop

@section('css')
<link rel="stylesheet" href="/css/styles.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
