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

Route::get('/article', function () {
    return view('article');
});

Route::get('/artidatos', function () {
    $articles = array('Primero', 'Segundo', 'Tercero');
    return view('artidatos', [
            'name' => ' Sergio Zulueta',
            'articles' => $articles
        ]
    );
});


Route::get('articles/{id}', 'ArticleController@mostrar');
