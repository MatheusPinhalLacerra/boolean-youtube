@extends('adminlte::page')

@section('title', 'Enviar Vídeo')

@section('content_header')
    <h1>Envie seu Vídeo</h1>

@stop

@section('content')

    <div class="container">
        
    <div class="row">
            <form action="{{ route('video.store', $id_course) }}" method="post" enctype="multipart/form-data" style="width: 100%">
                @csrf

                <label for="titulo-video">Título (obrigatório)</label>
                <p><input type="text" id="titulo-video" class="form-control col-6" name="title"
                        placeholder="Título do vídeo" required="required"></p>

                <label for="descricao-video">Descrição</label>
                <p>
                    <textarea name="description" id="descricao-video" class="form-control col-6" rows="2" cols="30"
                        rows="10" placeholder="Descrição do vídeo" required="required"></textarea>
                </p>
                <label for="arquivo-video">Arquivo de vídeo</label>
                <p><input type="file" id="arquivo-video" name="video" required="required"></p>

                <p><button type="submit" class="btn btn -primary" name="submit">Enviar</button></p>

            </form>
        </div>

    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
