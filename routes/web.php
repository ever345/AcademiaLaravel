<?php

use App\Http\Controllers\ControladorPrecios;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\Heladeria;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('helado/{opcion}', [heladeria::class, 'helados']);

Route::get('precio/{valor}', [ControladorPrecios::class, 'pruducto']);

Route::get('iva/{produc}/{valor}', [ControladorPrecios::class, 'getIVA']);

Route::resource('cursos', CursoController::class);
