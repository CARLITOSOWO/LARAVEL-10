<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;  //RECUERDA QUE TENEMOS QUE INDICARLE EL MODELO QUE VAMOS A USAR 
use Illuminate\Http\Request;
use League\CommonMark\Extension\DescriptionList\Node\Description;

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

    public function store(StoreCurso $request){ //ESTE M ETODO SE ENCARGA DE GUARDAR LOS DATOS EN LA BASE DE DATOS CREATE     
        $curso = Curso::create($request->all());
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
          $request->validate([
            'name'=>'required|min:3',
            'slug'=>'required|unique:cursos,slug,'. $curso->id,
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);
        
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('cursos.index');

    }

    
}
