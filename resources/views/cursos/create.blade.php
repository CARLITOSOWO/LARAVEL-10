@extends('layouts.plantilla')
@section('title','Cursos create')
    
@section('content')
        <h1>AQUI SE PUEDEN CREAR LOS CURSOS  </h1>


        <form action="{{route('cursos.store')}}" method="POST">
                @csrf
                <label>
                        NOMBRE:
                        <br>
                        <input type="text" name="name">
                </label>
                <br>
                <label>
                        Descripcion: 
                        <br>
                        <textarea name="descripcion" rows="5"></textarea>
                </label>
                <br>
                <label>
                        Categoria: 
                        <br>
                        <input type="text" name="categoria">
                </label>
                <br>
                <button type="submit">ENVIAR FORMULARIO </button>
        </form>
@endsection

