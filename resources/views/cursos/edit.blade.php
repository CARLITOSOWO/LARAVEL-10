@extends('layouts.plantilla')
@section('title','Cursos edit')
    
@section('content')
        <h1>AQUI SE PUEDEN EDITAR LOS CURSOS 😁🍕👌🤗  </h1>


        <form action="{{route('cursos.update', $curso)}}" method="post">
                @csrf
                @method('put')
                <label>
                        NOMBRE:
                        <br>
                        <input type="text" name="name" value="{{$curso->name}}">
                </label>
                <br>
                <label>
                        Descripcion: 
                        <br>
                        <textarea name="descripcion" rows="5" ">{{$curso->descripcion}}</textarea>
                </label>
                <br>
                <label>
                        Categoria: 
                        <br>
                        <input type="text" name="categoria" value="{{$curso->categoria}}">
                </label>
                <br>
                <button type="submit">Actualizar  FORMULARIO </button>
        </form>
@endsection

