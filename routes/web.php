<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController; 

Route::get('/', HomeController::class)->name('home');//OBTENCION DE RUTA POR MEDIO DEL CONTROLADOR 

//CREACION DE CRUD CON UNA SOLA RUTA 
Route::resource('cursos', CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');//ESTA FORMA DE DEFINIR LAS VISTAS SOLO LA VAMOS A USAR CUANDO QUEREMOS MOSTRAR CONTENIDO ESTATICO








?>