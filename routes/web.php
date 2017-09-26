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
Route::prefix('admin')->group(function () {
    Route::get('/', ['as' => 'admin.index', 'uses' => 'AdminController@index']);
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.show');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login');
    Route::post('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin_logout');
});

Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider')->name('login_with_facebook');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/users', ['as' => 'users.index', 'uses' => 'UserController@index']);
Route::get('/users/create', 'UserController@create')->name('user_create');
Route::post('/users/create', 'UserController@store')->name('user_save');
Route::get('/users/{id}/edit', 'UserController@edit')->name('user_edit');
Route::put('/users/update', 'UserController@update')->name('user_update');
// Route::get('/users', 'UserController@index')->name('user_admin');

Route::get('/bookself', 'BookselfController@index')->name('bookself.index');
Route::get('/bookself/create', 'BookselfController@create')->name('bookself.create');
Route::post('/bookself/create', 'BookselfController@store')->name('bookself.save');
Route::get('/bookself/{slug}', ['as' => 'bookself.single', 'uses' => 'BookselfController@getStatus'])
    ->where('slug', '[\w\d\-\_]+');

Route::get('/supplier', 'SupplierController@index')->name('supplier.index');
Route::get('/supplier/{slug}', ['as' => 'supplier.create', 'uses' => 'SupplierController@create'])
    ->where('slug', '[\w\d\-\_]+');
Route::post('/supplier/create', 'SupplierController@store')->name('supplier.save');

Route::get('/invoice', 'InvoiceController@index')->name('invoice.index');
Route::get('/invoice/create/{id}', 'InvoiceController@create')->name('invoice.create');
Route::post('/invoice/create', 'InvoiceController@store')->name('invoice.save');

Route::middleware(['auth:admin'])->group(function () {

    Route::get('/categories', ['as' => 'categories.index', 'uses' => 'CategoryController@index']);
    Route::get('/categories/create', ['as' => 'category.create', 'uses' => 'CategoryController@create']);
    Route::post('/categories/create', ['as' => 'category.save', 'uses' => 'CategoryController@store']);

    Route::get('/status', ['as' => 'status.index', 'uses' => 'StatusController@index']);
    Route::get('/status/create', ['as' => 'status.create', 'uses' => 'StatusController@create']);
    Route::post('/status/create', ['as' => 'status.save', 'uses' => 'StatusController@store']);

    Route::get('/images', ['as' => 'images.index', 'uses' => 'ImageController@index']);
    Route::get('/images/create', ['as' => 'images.create', 'uses' => 'ImageController@create']);
    Route::post('/images/create', ['as' => 'images.store', 'uses' => 'ImageController@store']);
});
