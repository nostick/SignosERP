<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home','HomeController@admin')->name('admin');

//Lista de rutas para Empresa
Route::resource('company', 'CompanyController');

//Lista de rutas para Clientes
Route::post('clients/suspend/{client}', 'ClientController@suspend');
Route::resource('clients','ClientController');

//Lista de rutas para Servicios
Route::resource('service','ServiceController');
Route::resource('service/category','CategoryServiceController',['as' => 'service']);