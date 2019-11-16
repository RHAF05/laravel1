<?php

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
    return view('welcome');
});

Route::get('nosotros', function () {
    return view('nosotros');
});

Route::get('contacto', 'PaginasController@contactenos');

//Productos
Route::get('productos', 'ProdcutosController@listar');
Route::get('productos/crear', 'ProdcutosController@crear');
Route::get('productos/editar/{id}', 'ProdcutosController@editar');
Route::get('productos/borrar/{id}', 'ProdcutosController@eliminar');


//Servicios
Route::resource('servicios', 'ServiciosController');
//Esta ruta, crea las siguientes 7 rutas automaticamente
//Route::get('servicios', 'ServiciosController@index'); //Listar
//Route::get('servicios/create', 'ServiciosController@create'); //crear - Form
//Route::post('servicios', 'ServiciosController@store'); //Guardar - la que realmente guarda en la bd
//Route::get('servicios/{id}/edit', 'ServiciosController@edit'); //Editar - Form
//Route::put('servicios/{id}', 'ServiciosController@update'); //Editar - Actualizar en BD
//Route::delete('servicios/{id}', 'ServiciosController@destroy'); //Borrar
