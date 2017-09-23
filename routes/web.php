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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider')->name('login_with_facebook');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/users', 'UserController@show')->name('user_index');
Route::get('/users/create', 'UserController@create')->name('user_create');
Route::get('/users/{id}/edit', 'UserController@edit')->name('user_edit');
Route::put('/users/update', 'UserController@update')->name('user_update');
Route::get('/admins', 'UserController@index')->name('user_admin');
