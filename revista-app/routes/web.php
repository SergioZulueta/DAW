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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'ArticleController@index');
Route::get('/articles', 'ArticleController@index')->name('articles.index');
Route::get('/articles/create', 'ArticleController@create')->name('articles.create')->middleware('auth');
Route::post('/articles', 'ArticleController@store')->name('articles.store');
Route::post('/articles/{id}/favourite', 'ArticleController@addFavourite')->name('articles.favourite');
Route::get('/articles/{id}', 'ArticleController@show')->name('articles.show');
Route::delete('/articles/{id}', 'ArticleController@destroy')->name('articles.destroy');

Route::post('/articles/{id}/comments', 'CommentController@store')->name('comments.store');



Auth::routes();
// Añadimos una ruta de tipo GET para /logout (por defecto solo viene POST)
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
