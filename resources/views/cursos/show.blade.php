@extends('layouts.plantilla')
@section('title','Cursos' .$curso->name)
    
@section('content')
        <h1>Bienvenido al curso {{$curso->name}}  </h1>
        <a href="{{route('cursos.index')}}">VOLVER A CURSOS</a>
        <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
        <p>{{$curso->descripcion}}</p>
@endsection
