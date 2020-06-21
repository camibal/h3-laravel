<?php
//vista usuario

//home
Route::view('/', 'home')->name('home');
//nosotros
Route::view('/about', 'about')->name('about');
//buscar facturas
Route::view('/bill-search', 'bill-search')->name('bill-search');


//vista administrador

//vista principal admin
Route::view('admin/', 'admin/principal')->name('principal');

//vista regitro usuario
Route::view('admin/register-user', 'admin/register-user')->name('register-user');
//controlador registro usuario
Route::post('admin/register-user', 'listuserController@create')->name('register-user.create');
//vista listar facturas
Route::view('admin/list-user', 'admin/list-user')->name('list-user');
//controlador listar usuarios
Route::get('admin/list-user', 'listuserController@show')->name('list-user');
//vista editar usuarios
Route::view('admin/list-user-edit', 'admin/list-user-edit')->name('list-user-edit');
//editar usuarios
Route::get('admin/list-user-edit/{usuarios}', 'listuserController@edit')->name('list-user-edit');
//editar usuarios
Route::patch('admin/list-user/{usuarios}', 'listuserController@update')->name('list-user');
//controlador eliminar usuarios
Route::delete('admin/list-user/{id}', 'listuserController@destroy')->name('list-user-destroy');


//vista registrar factura
Route::view('admin/register-fac', 'admin/register-fac')->name('register-fac');
//controlador crear factura
Route::post('admin/register-fac', 'listfacController@create')->name('register-fac.create');
//vista listar facturas
Route::view('admin/list-fac', 'admin/list-fac')->name('list-fac');
//controlador listar registros de facturas
Route::get('admin/list-fac', 'listfacController@show')->name('list-fac');
 //controlador eliminar registro de factura
Route::delete('admin/list-fac/{id}', 'listfacController@destroy')->name('list-fac-destroy');
 //controlador subir pdf al servidor
Route::post('admin/list-fac', 'listfacController@download')->name('list-fac-download');

