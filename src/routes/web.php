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
    return view('index');
})->name('home');

Route::get('noticias', function (){
    return view('posts');
})->name('noticias');

//retornando una ruta con un string + una variable opcional y definimos un valor por defecto
Route::get('test/{string?}', function ($string = "sin texto"){
    return 'texto de prueba: ' . $string ;
    //agregamos un where donde le decimos a la variable mediante una expresion regular que valores puede recibir como parametro
})->where('string','[0-9]+');

//atajo para retornar views
// Route::view('/posts', 'posts');