<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController; 

Route::get('/', HomeController::class );//OBTENCION DE RUTA POR MEDIO DEL CONTROLADOR 

//CREACION DE GRUPO DE RUTAS QUE COMPARTEN EL CONTROLADOR
Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});




?>