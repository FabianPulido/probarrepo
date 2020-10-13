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

Route::post('Plantilla/', 'App\Controllers\UsuariosController@store')->name("crear.usuario");

Route::resource('Plantilla','UsuariosController');




