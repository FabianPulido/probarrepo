<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Plantilla.index');
})->name('paginauno');

Route::get('/Plantilla.Crear', function () {
    return view('Plantilla.Crear');
})->name("pagdos");


Route::resource('Plantilla','UsuariosController');




