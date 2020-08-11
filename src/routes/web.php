<?php

use Illuminate\Support\Facades\Route;
use App\Exports\StaffExport;
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
Route::get('noticias', 'PagesController@noticias')->name('noticias');
Route::post('noticias', 'PagesController@filtrarNoticias')->name('filtrar.noticias');
Route::get('noticias/tipo/{string?}', 'PagesController@filtrarNoticiasTipo')->name('filtrar.tipo');


Route::get('noticias/{id}', 'PagesController@noticiaDetalle')->name('noticias.detalle');
Route::get('admin/noticias', 'PostController@create')->name('noticias.form');
Route::post('admin/noticias', 'PostController@store')->name('noticias.create');
Route::get('admin/noticias/editar/{id}', 'PostController@edit')->name('post.edit');
Route::put('admin/noticias/editar/{id}', 'PostController@update')->name('post.update');
Route::delete('admin/noticias/eliminar/{id}','PostController@destroy')->name('post.delete');

//staff
Route::get('staff', 'PagesController@staffs')->name('staff');
Route::get('admin/staff', 'StaffController@create')->name('staff.form');
Route::post('admin/staff', 'StaffController@store')->name('staff.create');
Route::get('admin/staff/editar/{id}', 'StaffController@edit')->name('staff.edit');
Route::put('admin/staff/editar/{id}', 'StaffController@update')->name('staff.update');
Route::delete('admin/staff/eliminar/{id}','StaffController@destroy')->name('staff.delete');

Route::get('admin/staff/export/{estado?}', function($estado = 0){
    return (new StaffExport)->getEstado($estado)->download('staff.xlsx');
})->name('staff.exportar');



//retornando una ruta con un string + una variable opcional y definimos un valor por defecto
Route::get('test/{string?}', function ($string = "sin texto"){
    return 'texto de prueba: ' . $string ;
    //agregamos un where donde le decimos a la variable mediante una expresion regular que valores puede recibir como parametro
})->where('string','[0-9]+')->middleware('auth');

//atajo para retornar views
// Route::view('/posts', 'posts');
//ruta de controlador y con session
Route::resource('admin/categoria','CategoriaController')->middleware('auth');

//Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

