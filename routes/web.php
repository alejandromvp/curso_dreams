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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('/saludos/{nombre?}','PagesController@saludos')->where('nombre', "[A-Za-z]+")->name('saludando');

// ------------------------------------------REST-----------------------------------------------

Route::get('mensajes/create', 'MessagesController@create')->name('messages.create');

Route::post('mensajes', 'MessagesController@store');

Route::get('mensajes', 'MessagesController@index')->name('messages.index');

Route::get('mensajes/{id}', 'MessagesController@show')->name('messages.show');

Route::get('mensajes/{id}/edit', 'MessagesController@edit')->name('messages.edit');

Route::put('mensajes/{id}', 'MessagesController@update')->name('messages.update');

Route::delete('mensajes/{id}', 'MessagesController@destroy')->name('messages.destroy');


