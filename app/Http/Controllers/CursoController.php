<?php

namespace App\Http\Controllers;

use App\Models\Curso;  //RECUERDA QUE TENEMOS QUE INDICARLE EL MODELO QUE VAMOS A USAR 
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id', 'desc')->paginate(); //INDICA QUE EN LA VARIABLE $cursos SE ALMACENAN TODOS LOS CURSOS
       // return $cursos; //CON ESTE return INDICAMOS QUE REGRESE TODOS LOS REGISTROS PARA VERLOS EN LA PAGINA 

       return view('cursos.index', compact('cursos'));
    }


    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){ //ESTE METODO SE ENCARGA DE GUARDAR LOS DATOS EN LA BASE DE DATOS CREATE 

    //ANTES DE LA INTANCIA PASAMOS UNA VALIDACION DE LOS CAMPOS QUE VAMOS A GUARDAR 
        $request->validate([
            'name'=>['required','min:3'],
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);

        $curso = new Curso(); //hacemos intancia el modelo 

        $curso->name =$request->name;
        $curso->descripcion =$request->descripcion;
        $curso->categoria =$request->categoria; 
        
        $curso->save();
        //return redirect()->route('cursos.show', $curso->id);
        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        //return $curso;//para ver que tiene el registro 
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        $curso->name = $request->name ;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        //return $curso;
        $curso->save();
        return redirect()->route('cursos.show', $curso);

    }

}
