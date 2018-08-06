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

//---------------------------login----------------------------------------------------------------------

Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
//-------------------------------------login-------------------------------------------------------
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

//control+p  router.php  y luego control+f auth que es una funcion con las rutas