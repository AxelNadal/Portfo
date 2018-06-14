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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/emails','EmailController');

Route::get('/admin/pages','PageController@index');

Route::resource('/admin/posts','PostController')->middleware('auth');


Route::get('/admin/edits','EditController@index');

Route::get('/admin/projets','ProjetController@index');

