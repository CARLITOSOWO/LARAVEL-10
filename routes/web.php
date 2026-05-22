<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController; 

Route::get('/', HomeController::class );//OBTENCION DE RUTA POR MEDIO DEL CONTROLADOR 

//CREACION DE CRUD CON UNA SOLA RUTA 
Route::resource('cursos', CursoController::class);









?>