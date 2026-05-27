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
                        <input type="text" name="name" value="{{old('name', $curso->name)}}">
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
                        <input type="text" name="slug" value="{{old('slug', $curso->slug)}}">
                </label>
                @error('slug')
                <br>
                <span>*{{ $message }}</span>
                <br>
                @enderror

                <br>
                

                <br>
                <label>
                        Descripcion: 
                        <br>
                        <textarea name="descripcion" rows="5" ">{{old('descripcion', $curso->descripcion)}}</textarea>
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
                        <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
                </label>
                 @error('categoria')
                <br>
                <span>*{{ $message }}</span>
                <br>
                @enderror

                <br>
                <button type="submit">Actualizar  FORMULARIO </button>
        </form>
@endsection

