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
}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Rutas CRUD
 
/* Crear */
Route::get('admin/articulos/crear', 'ArticulosController@crear')->name('admin/articulos/crear');
Route::put('admin/articulos/store', 'ArticulosController@store')->name('admin/articulos/store');
 
/* Leer */
Route::get('admin/articulos', 'ArticulosController@index')->name('admin/articulos');
Route::get('admin/inventario', 'ArticulosController@inventario')->name('admin/inventario');
 
/* Actualizar */
Route::get('admin/articulos/actualizar/{id}', 'ArticulosController@actualizar')->name('admin/articulos/actualizar');
Route::put('admin/articulos/update/{id}', 'ArticulosController@update')->name('admin/articulos/update');
 
/* Eliminar */
Route::put('admin/articulos/eliminar/{id}', 'ArticulosController@eliminar')->name('admin/articulos/eliminar');
 
/* Eliminar imagen de un registro */
Route::get('admin/articulos/eliminarimagen/{id}{bid}', 'ArticulosController@eliminarimagen')->name('admin/articulos/eliminarimagen');
 
/* Vista para los detalles de un registro */
Route::get('admin/articulos/detallesproducto/{id}', ['as' => 'admin/articulos/detallesproducto', 'uses' => 'ArticulosController@detallesproducto']);
