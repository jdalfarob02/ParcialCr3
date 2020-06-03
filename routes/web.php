<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de Cliente
Route::get('cliente',['as'=>'clientes.index', 'uses'=>'ClienteController@index',]);
Route::get('cliente/create',['as'=>'clientes.create', 'uses'=>'ClienteController@create',]);
Route::get('cliente/{id}/edit',['as'=>'clientes.edit', 'uses'=>'ClienteController@edit',]);

Route::get('cliente/{id}/delete',['as'=>'cliente.delete', 'uses'=>'ClienteController@delete',]);
Route::post('cliente',['as'=>'cliente.store', 'uses'=>'ClienteController@store']);
Route::post('cliente/actualizar/{id}','ClienteController@update')->name('cliente.update');
//------------------------------------------------------------------------------------------------

//rutas de servicios
Route::get('servicio',['as'=>'servicios.index', 'uses'=>'ServicioController@index',]);
Route::get('servicio/create',['as'=>'servicio.create', 'uses'=>'ServicioController@create',]);
Route::get('servicio/{id}/editar',['as'=>'servicio.edit', 'uses'=>'ServicioController@edit',]);
Route::patch('servicio/{id}',['as'=>'servicio.update', 'uses'=>'ServicioController@update',]);
Route::get('servicio/{id}/delete',['as'=>'servicio.delete', 'uses'=>'ServicioController@delete',]);
Route::post('servicio',['as'=>'servicio.store', 'uses'=>'ServicioController@store']);
//---------------------------------------------------------------------------------------------


//Rutas de categoria
Route::get('categoria',['as'=>'categorias.index', 'uses'=>'CategoriaController@index',]);
Route::get('categoria/create',['as'=>'categorias.create', 'uses'=>'CategoriaController@create',]);
Route::get('categoria/{id}/edit',['as'=>'categorias.edit', 'uses'=>'CategoriaController@edit',]);

Route::get('categoria/{id}/delete',['as'=>'categorias.delete', 'uses'=>'CategoriaController@delete',]);
Route::post('categoria',['as'=>'categoria.store', 'uses'=>'CategoriaController@store']);
Route::post('categoria/actualizar/{id}','CategoriaController@update')->name('categoria.update');
//------------------------------------------------------------------------------------------------
