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

Route::get('/', 'PagesController@home')->name('home');

Route::get('noticias', 'PagesController@noticias')->name('noticias');
Route::get('noticias/{id}', 'PagesController@detallePost')->name('noticias.detalle');
Route::get('admin/noticias', 'PagesController@formPost')->name('noticias.form');
Route::post('admin/noticias', 'PagesController@crearPost')->name('noticias.create');

Route::get('staff', 'PagesController@staff')->name('staff');

Route::get('ramas/{name?}', 'PagesController@ramas')->name('ramas');

Route::get('admin/staff', 'PagesController@formStaff')->name('staff.form');
Route::post('admin/staff', 'PagesController@crearStaff')->name('staff.create');
Route::get('admin/staff/editar/{id}', 'PagesController@editarStaff')->name('staff.edit');
Route::put('admin/staff/editar/{id}', 'PagesController@actualizarStaff')->name('staff.update');
Route::delete('eliminar/{id}','PagesController@eliminarStaff')->name('staff.delete');

Route::view('nosotros', 'aboutus')->name('nosotros');

//retornando una ruta con un string + una variable opcional y definimos un valor por defecto
Route::get('test/{string?}', function ($string = "sin texto"){
    return 'texto de prueba: ' . $string ;
    //agregamos un where donde le decimos a la variable mediante una expresion regular que valores puede recibir como parametro
})->where('string','[0-9]+');

//atajo para retornar views
// Route::view('/posts', 'posts');