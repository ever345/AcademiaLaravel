<?php

use App\Http\Controllers\ControladorPrecios;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\Heladeria;
use App\Http\Controllers\micontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('helado/{opcion}', [heladeria::class, 'helados']);

Route::get('precio/{valor}', [ControladorPrecios::class, 'pruducto']);

Route::get('iva/{produc}/{valor}', [ControladorPrecios::class, 'getIVA']);


Route::get('nosotros', [CursoController::class, 'info']);

Route::get('docentes', [CursoController::class, 'informacion']);

Route::resource('cursos', CursoController::class);



