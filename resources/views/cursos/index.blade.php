@extends('layouts.plantilla')
@section('title','Cursos')
    
@section('content')
        <h1>BIENVENIDO A LA PAGINA PRINCIPAL DE CURSOS OWO WEB, YA USAMOS PLANTILLA BLADE  </h1>
        <a href="{{route('cursos.create')}}">CREAR CURSO </a>
        <ul>
                @foreach ($cursos as $curso)
                <li>
                        <a href="{{route('cursos.show',$curso)}}">{{$curso->name}}</a>
                </li>
                    
                @endforeach
        </ul>

        {{$cursos->links()}}
@endsection

