@extends('layouts.plantilla')
@section('title','Cursos create')
    
@section('content')
        <h1>AQUI SE PUEDEN CREAR LOS CURSOS  </h1>


        <form action="{{route('cursos.store')}}" method="POST">
                @csrf
                <label>
                        NOMBRE:
                        <br>
                        <input type="text" name="name" value="{{old('name')}}">
                </label>
                @error('name')
                <br>
                <span>*{{ $message }}</span>
                <br>
                @enderror

                <br>
                <label>
                        SLUG:
                        <br>
                        <input type="text" name="slug" value="{{old('slug')}}">
                </label>
                @error('slug')
                <br>
                <span>*{{ $message }}</span>
                <br>
                @enderror

                <br>
                <label>
                        Descripcion: 
                        <br>
                        <textarea name="descripcion" rows="5"> {{old('descripcion')}} </textarea>
                </label>
                @error('descripcion')
                <br>
                <span>*{{ $message }}</span>
                <br>
                @enderror


                <br>
                <label>
                        Categoria: 
                        <br>
                        <input type="text" name="categoria" value="{{old('categoria')}}">
                </label>
                 @error('categoria')
                <br>
                <span>*{{ $message }}</span>
                <br>
                @enderror


                <br>
                <button type="submit">ENVIAR FORMULARIO </button>
        </form>
@endsection

