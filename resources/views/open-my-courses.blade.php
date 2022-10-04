<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>

@extends('adminlte::page') 

@section('title', 'Dashboard')

@section('content_header')
    <h1>Curso Aberto</h1>
@stop

@section('content')

@foreach ($courses as $course)
    <h1>{{$course->name}}</h1>
    <p>{{$course->description}}</p>
    <img src="/img/cursos/{{ $course->image }}" alt="" style="width: 150px">
@endforeach
<h1></h1>
<h2>Videos do curso:</h2>
@foreach ($videos as $videos)
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">

                    <div class="inner card-info-courses" id="">
                        <h6><strong>{{ $videos->title }}</strong></h6>
                        <p>{{ $videos->description }}</p>
                    </div>
                    <a href="{{route('player.index', $videos->id)}}" class="small-box-footer">Assistir<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        @endforeach

  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
