<?php

namespace App\Http\Controllers;

use App\Models\Curso;  //RECUERDA QUE TENEMOS QUE INDICARLE EL MODELO QUE VAMOS A USAR 
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::paginate(); //INDICA QUE EN LA VARIABLE $cursos SE ALMACENAN TODOS LOS CURSOS
       // return $cursos; //CON ESTE return INDICAMOS QUE REGRESE TODOS LOS REGISTROS PARA VERLOS EN LA PAGINA 

       return view('cursos.index', compact('cursos'));
    }


    public function create(){
        return view('cursos.create');
    }

    public function store(){
        
    }

    public function show($id){

        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }

}
