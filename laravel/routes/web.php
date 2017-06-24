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
    return view('Article.index');
});

Route::get('/Article','ArticleController@index');
Route::get('/Article/create','ArticleController@create');
Route::post('/Article','ArticleController@store');
Route::get('/Article/{id}','ArticleController@show');
Route::get('/Article/{id}/edit','ArticleController@edit');
Route::put('/Article/{id}','ArticleController@update');
Route::delete('/Article/{id}','ArticleController@destroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
