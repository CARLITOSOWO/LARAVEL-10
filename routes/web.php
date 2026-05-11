<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController; 

Route::get('/', HomeController::class );//OBTENCION DE RUTA POR MEDIO DEL CONTROLADOR 

//CREACION DE GRUPO DE RUTAS QUE COMPARTEN EL CONTROLADOR
// Route::controller(CursoController::class)->group(function(){
//     Route::get('cursos', 'index');
//     Route::get('cursos/create', 'create');
//     Route::get('cursos/{curso}', 'show');
// });

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos',[CursoController::class, 'store'])->name('cursos.store');



Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');





?>