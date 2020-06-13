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


//general
Route::get('/', 'PagesController@portada')->name('portada');
Route::get('ramas/{name?}', 'PagesController@ramas')->name('ramas');
Route::view('nosotros', 'aboutus')->name('nosotros');

//post
Route::get('noticias', 'PostController@index')->name('noticias');
Route::get('noticias/{id}', 'PostController@show')->name('noticias.detalle');
Route::get('admin/noticias', 'PostController@create')->name('noticias.form');
Route::post('admin/noticias', 'PostController@store')->name('noticias.create');



//staff
Route::get('staff', 'StaffController@index')->name('staff');
Route::get('admin/staff', 'StaffController@create')->name('staff.form');
Route::post('admin/staff', 'StaffController@store')->name('staff.create');
Route::get('admin/staff/editar/{id}', 'StaffController@edit')->name('staff.edit');
Route::put('admin/staff/editar/{id}', 'StaffController@update')->name('staff.update');
Route::delete('eliminar/{id}','StaffController@destroy')->name('staff.delete');


//retornando una ruta con un string + una variable opcional y definimos un valor por defecto
Route::get('test/{string?}', function ($string = "sin texto"){
    return 'texto de prueba: ' . $string ;
    //agregamos un where donde le decimos a la variable mediante una expresion regular que valores puede recibir como parametro
})->where('string','[0-9]+')->middleware('auth');;

//atajo para retornar views
// Route::view('/posts', 'posts');

//Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
