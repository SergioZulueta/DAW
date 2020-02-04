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
    return redirect()->route('pruebaIndex');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//pruebas

Route::get('/pruebas', 'PruebaController@index')->name('pruebaIndex');
Route::get('/pruebas/create', 'PruebaController@create')->name('createPruebas');
Route::post('/pruebas', 'PruebaController@store')->name('pruebaStore');
Route::get('/pruebas/{id}', 'PruebaController@show')->name('showPruebas');
Route::get('/pruebas/{id}/edit', 'PruebaController@edit')->name('editPruebas');
Route::post('/pruebas/{id}', 'PruebaController@update')->name('pruebaUpdate');
Route::get('/pruebas/{id}/delete', 'PruebaController@destroy')->name('pruebaDelete');



//desafios
Route::get('/pruebas/{id}/desafios', 'DesafioControler@index')->name('desafioIndex');
Route::get('/pruebas/{id}/desafios/create', 'DesafioControler@create')->name('createdesafios');
Route::post('/pruebas/{id}/desafios', 'DesafioControler@store')->name('desafiosStore');
Route::get('/pruebas/{pruebas_id}/desafios/{desafios_id}', 'DesafioControler@show')->name('showdesafios');
Route::get('/pruebas/{pruebas_id}/desafios/{desafios_id}/edit', 'DesafioControler@edit')->name('editdesafios');
Route::post('/pruebas/{id}/desafios/{desafios_id}', 'DesafioControler@update')->name('desafiosUpdate');
Route::delete('/pruebas/{id}/desafios/{desafios_id}', 'DesafioControler@delete')->name('desafiosDelete');
