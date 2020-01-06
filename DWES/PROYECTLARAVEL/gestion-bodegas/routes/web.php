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


Route::get('/index', 'bodegaController@bodegaController')->name('index');

Route::get('/add', 'bodegaController@store');

Route::get('/anadirBodega', function () {
    return view('anadirBodega');
});

Route::get('/borrarBodega/{id}', 'bodegaController@deleteBodega');

Route::get('/detalleBodega/{id}', 'bodegaController@detalleBodega');

Route::get('/updateBodega/{id}', 'bodegaController@updateBodega');

Route::get('/detalleVino/{id}', 'vinoController@detalleVino');

Route::get('/borrarVino/{id}', 'vinoController@borrarVino');

Route::get('/addVino', 'vinoController@storeVino');

Route::get('/anadirVino', function () {
    return view('anadirVino');
});
