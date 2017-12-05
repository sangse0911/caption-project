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
    return view('home');
});

Auth::routes();
/**
 *
 */
Route::get('/home', 'HomeController@index')->name('home');

/**
 *
 */

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.show');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::post('/admin/logout', 'Auth\AdminLoginController@adminLogout')->name('admin_logout')->middleware('auth:admin');

/**
 *
 */
Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider')->name('login_with_facebook');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');

// Route::get('/users/{id}/edit', 'UserController@edit')->name('user_edit');
// Route::put('/users/update', 'UserController@update')->name('user_update');

/**
 *
 */
Route::get('/books', ['as' => 'book.index', 'uses' => 'BookController@index']);
Route::get('/book/{id}', 'BookController@show')->name('book.show');
Route::get('/sell-book', ['as' => 'book.sell', 'uses' => 'BookController@sellBook']);
Route::get('/renter-book', ['as' => 'book.renter', 'uses' => 'BookController@renBook']);
Route::get('/hot-book', ['as' => 'book.hot', 'uses' => 'BookController@hotBook']);

/**
 *
 */
// Route::get('/content-post', ['as' => 'content.post', 'uses' => 'PostController@contentPost']);
Route::get('/supplier/{id}', ['as' => 'supplier.show', 'uses' => 'SupplierController@show']);

/**
 *
 */
Route::middleware(['auth:admin', 'super_admin'])->group(function () {

    /**
     *
     */
    Route::get('/roles', 'RoleController@index')->name('super.admin.index');
    Route::post('/role/store', 'RoleController@store')->name('super.admin.store');
    Route::put('/role/update', 'RoleController@update')->name('super.admin.update');
    Route::get('/role/{id}', 'RoleController@show')->name('super.admin.show');

    /**
     *
     */
    Route::get('/admin/contacts', 'ContactController@index')->name('admin.contact.index');
    Route::post('/contact/store', 'ContactController@store')->name('admin.contact.store');
    Route::put('/contact/update', 'ContactController@update')->name('admin.contact.update');
    Route::get('/contact/{id}', 'ContactController@show')->name('admin.contact.show');

    Route::get('/admins', 'AdminController@listAllManager')->name('admin.managers.index');
});
/**
 *
 */
Route::middleware(['auth:admin'])->group(function () {

    Route::get('/admin', 'AdminController@index')->name('admin.index');
    /**
     *
     */
    Route::get('/users', ['as' => 'users.index', 'uses' => 'UserController@index']);
    Route::post('/users/store', 'UserController@store')->name('user.store');
    Route::get('/admin/users/{id}', 'UserController@show')->name('admin.user.show');
    Route::put('/admin/users/update', 'UserController@update')->name('admin.user.update');

    /**
     *
     */
    Route::get('/admin/books', ['as' => 'admin.book.index', 'uses' => 'AdminController@indexBook']);
    Route::get('/admin/books/{id}', ['as' => 'admin.book.show', 'uses' => 'BookController@show']);

    /**
     *
     */
    Route::get('/bookshelves', 'BookshelfController@index')->name('admin.bookshelf.index');
    Route::get('/bookshelf/{id}', 'BookshelfController@show')->name('bookshelf.show');
    Route::post('/bookshelf/store', 'BookshelfController@store')->name('bookshelf.store');
    Route::put('/bookshelf/update', 'BookshelfController@update')->name('bookshelf.update');
    /**
     *
     */
    Route::get('/users/create', 'UserController@create')->name('user.create');
    Route::post('/users/create', 'UserController@storeUser')->name('user.create.supplier');

    /**
     *
     */
    Route::get('/suppliers', 'SupplierController@index')->name('supplier.index');
    Route::get('/suppliers/{id}', 'SupplierController@show')->name('supplier.show');
    Route::get('/supplier/detail/{id}', 'SupplierController@showDetail')->name('supplier.detail');
    Route::post('/supplier/store', 'SupplierController@store')->name('supplier.save');
    Route::post('/supplier/createIfExistUser', 'SupplierController@storeIfExist')->name('supplier.save.exist');

    /**
     *
     */
    Route::get('/admin/categories', ['as' => 'admin.categories.index', 'uses' => 'CategoryController@getIndex']);
    Route::get('/admin/category/create', ['as' => 'category.create', 'uses' => 'CategoryController@create']);
    Route::post('/admin/category/store', ['as' => 'category.create', 'uses' => 'CategoryController@store']);

    // Route::get('/status', ['as' => 'status.index', 'uses' => 'StatusController@index']);
    // Route::get('/status/create', ['as' => 'status.create', 'uses' => 'StatusController@create']);
    // Route::post('/status/create', ['as' => 'status.save', 'uses' => 'StatusController@store']);

    /**
     *
     */
    Route::get('/images', ['as' => 'images.index', 'uses' => 'ImageController@index']);
    Route::get('/images/create', ['as' => 'images.create', 'uses' => 'ImageController@create']);
    Route::post('/images/create', ['as' => 'images.store', 'uses' => 'ImageController@store']);

    /**
     *
     */
    Route::get('/book/create/{slug}', ['as' => 'book.create', 'uses' => 'BookController@create']);
    Route::post('/book/store', ['as' => 'book.store', 'uses' => 'BookController@store']);
    Route::post('/book/storeIfOwned', 'BookController@storeIfOwned')->name('book.own.store');
    Route::put('/book/update', 'BookController@update')->name('book.update');

    /**
     *
     */
    Route::get('/event/create', ['as' => 'event.create', 'uses' => 'EventController@create']);
    Route::post('/event/store', ['uses' => 'EventController@store'])->name('event.store');
    Route::put('/event/update', ['as' => 'event.update', 'uses' => 'EventController@update']);
    Route::get('/event/{id}', ['as' => 'event.show', 'uses' => 'EventController@show']);
    Route::get('/admin/events', ['as' => 'event.admin.show', 'uses' => 'EventController@content']);

    /**
     *
     */

    Route::get('/admin/sell-book', 'BookController@sellBook')->name('admin.book.sell-book');
    Route::get('/admin/rent-book', 'BookController@rentBook')->name('admin.book.rent-book');
});

Route::get('/events', ['as' => 'event.index', 'uses' => 'EventController@index']);

Route::get('/api/user', ['as' => 'api.user.index', 'uses' => 'UserController@indexApi']);
Route::get('/users/content', ['as' => 'users.content', 'uses' => 'UserController@getContent']);

/**
 *
 */
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/add', ['as' => 'cart.add', 'uses' => 'CartController@add']);
Route::delete('/cart/delete/{id}', 'CartController@destroy')->name('cart.delete');

/**
 *
 */
Route::get('/posts', ['as' => 'post.index', 'uses' => 'PostController@index']);

/**
 *
 */
Route::middleware(['auth'])->group(function () {

    /**
     *
     */
    Route::get('/post/create', ['as' => 'post.create', 'uses' => 'PostController@create']);
    Route::get('/post/createSale', 'PostController@createSale')->name('book.create.sale');
    Route::post('/book/storePostBook', ['as' => 'post.store', 'uses' => 'BookController@storePostBook']);
    Route::post('/book/storeSaleBook', 'BookController@storeSaleBook')->name('sale.book');

    Route::get('/book/info', ['as' => 'book.info', 'uses' => 'BookController@getSupplier']);

    /**
     *
     */
    Route::post('/addPostWishlist', ['as' => 'add.post.wishlist', 'uses' => 'WishListController@createWishlistPost']);
    Route::post('/addBookWishlist', ['as' => 'add.book.wishlist', 'uses' => 'WishListController@createWishlistBook']);

    /**
     *
     */
    Route::post('/addBookRate', 'RateController@store')->name('book.rate');

    /**
     *
     */
    Route::post('/cart/store', 'CartController@order')->name('cart.store');

});
Route::get('/post/{id}', 'PostController@show')->name('post.show');
