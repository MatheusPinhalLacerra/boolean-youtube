@extends('adminlte::page')

@section('title', 'Dashboard')
<link rel="stylesheet" href="/css/styles.css">
@section('content_header')

    <h1>Editando: {{ $course->name }}</h1>


@stop

@section('content')

    <form action="{{ route('edit-course.update', $course->id) }}" method="POST" enctype="multipart/form-data"
        style="width: 100%">
        @csrf
        @method('PUT')
        {{-- <label for="titulo-video">Nome do Curso (obrigatório)</label> --}}

        <div class="course-create-form" style="margin-bottom: 20px">
            <label for="curso">Curso</label>
            <input type="text" class="form-control col-6" id="curso" name="name" placeholder="Nome do Curso"
                required="required" value="{{ $course->name }}">
        </div>



        <div class="course-create-form" style="margin: 20px 0">
            <label for="curso">Nome do Instrutor:</label>
            <input type="text" class="form-control col-6" id="instructor_name" name="instructor_name"
                placeholder="Nome do Instrutor" required="required" value="{{ $course->instructor_name }}">
        </div>

        <div class="course-create-form">
            <label for="Área do curso">Área do curso:</label>
            <select class="form-control col-6" name="course_areas_id" id="category" required="required">
                <option hidden>Selecione a Área do curso</option>
                @foreach ($area_course as $area)
                    @if (isset($course->course_area)&&($course->course_area->id==$area->id))
                     <option value="{{ $area->id }}" selected>{{ $area->name_area }}</option>
                    @else
                    <option value="{{ $area->id }}">{{ $area->name_area }}</option>
                    @endif
                  
                @endforeach
            </select>

        </div>

        <div class="course-create-form" style="margin: 20px 0">
            <label for="descricao">Descrição</label>
            {{-- <textarea name="description" id="descricao" cols="30" rows="5" class="form-control col-6" --}}
            {{-- required="required" ></textarea> --}}
            <input type="text" class="form-control col-6" id="descricao" name="description"
                placeholder="Descrição do Curso" value="{{ $course->description }}">
        </div>

        <div style="margin: 30px 0%">
            <p>Imagem de Capa</p>
            <label for="imagem" class="col-12" style=""></label>
            <input type="file" name="image" id="imagem" value="{{ $course->image }}"></textarea>
            <img src="/img/cursos/{{ $course->image }}" alt="" style="width: 150px">
        </div>
        <button class="btn btn-primary">Salvar alterações</button>
    </form>


@stop

@section('css')

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
