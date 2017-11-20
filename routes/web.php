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
Route::get('/a', function () {
    return view('BSO.trangchu');
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

// Route::get('/users/{id}/edit', 'UserController@edit')->name('user_edit');
// Route::put('/users/update', 'UserController@update')->name('user_update');

Route::get('/book', ['as' => 'book.index', 'uses' => 'BookController@index']);
Route::get('/sell-book', ['as' => 'book.sell', 'uses' => 'BookController@sellBook']);
Route::get('/renter-book', ['as' => 'book.renter', 'uses' => 'BookController@renBook']);
Route::get('/hot-book', ['as' => 'book.hot', 'uses' => 'BookController@hotBook']);

Route::get('/content-post', ['as' => 'content.post', 'uses' => 'PostController@contentPost']);

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/users', ['as' => 'users.index', 'uses' => 'UserController@index']);
    Route::post('/users/store', 'UserController@store')->name('user.store');

    Route::get('/admin/books', ['as' => 'admin.book.index', 'uses' => 'AdminController@indexBook']);
    Route::get('/admin/books/{id}', ['as' => 'admin.book.show', 'uses' => 'AdminController@showBook']);

    Route::get('/bookself', 'BookselfController@index')->name('bookself.index');
    Route::get('/bookself/create', 'BookselfController@create')->name('bookself.create');
    Route::post('/bookself/create', 'BookselfController@store')->name('bookself.save');
    Route::get('/bookself/{slug}', ['as' => 'bookself.single', 'uses' => 'BookselfController@getStatus'])
        ->where('slug', '[\w\d\-\_]+');

    Route::get('/users/create', 'UserController@create')->name('user.create');
    Route::post('/users/create', 'UserController@storeUser')->name('user.create.supplier');

    Route::get('/supplier', 'SupplierController@index')->name('supplier.index');
    Route::get('/supplier/create', ['as' => 'supplier.create', 'uses' => 'SupplierController@create']);
    Route::post('/supplier/create', 'SupplierController@store')->name('supplier.save');
    Route::post('/supplier/create', 'SupplierController@storeIfExist')->name('supplier.save.exist');

    Route::get('/categories', ['as' => 'categories.index', 'uses' => 'CategoryController@index']);
    Route::get('/categories/create', ['as' => 'category.create', 'uses' => 'CategoryController@create']);
    Route::post('/categories/create', ['as' => 'category.save', 'uses' => 'CategoryController@store']);

    // Route::get('/status', ['as' => 'status.index', 'uses' => 'StatusController@index']);
    // Route::get('/status/create', ['as' => 'status.create', 'uses' => 'StatusController@create']);
    // Route::post('/status/create', ['as' => 'status.save', 'uses' => 'StatusController@store']);

    Route::get('/images', ['as' => 'images.index', 'uses' => 'ImageController@index']);
    Route::get('/images/create', ['as' => 'images.create', 'uses' => 'ImageController@create']);
    Route::post('/images/create', ['as' => 'images.store', 'uses' => 'ImageController@store']);

    Route::get('/book/create/{slug}', ['as' => 'book.create', 'uses' => 'BookController@create']);
    Route::post('/book/create', ['as' => 'book.save', 'uses' => 'BookController@store']);

    Route::get('/event/create', ['as' => 'event.create', 'uses' => 'EventController@create']);
    Route::post('/event/store', ['uses' => 'EventController@store'])->name('event.store');
    Route::put('/event/update', ['as' => 'event.update', 'uses' => 'EventController@update']);
    Route::get('/event/{id}', ['as' => 'event.show', 'uses' => 'EventController@show']);
    Route::get('/content', ['as' => 'event.content', 'uses' => 'EventController@content']);

    Route::get('/event', ['as' => 'event.index', 'uses' => 'EventController@index']);
    Route::get('/trangquantri', function () {
        return view('admin.sachban.themsachban');
    });
});

Route::get('/api/user', ['as' => 'api.user.index', 'uses' => 'UserController@indexApi']);
Route::get('/users/content', ['as' => 'users.content', 'uses' => 'UserController@getContent']);

Route::get('/layouts/', ['as' => 'layouts.index', 'uses' => 'CartController@index']);
Route::get('/layouts/newtest', ['as' => 'layouts.newtest', 'uses' => 'CartController@create']);
Route::get('/layouts/cart', ['as' => 'layouts.newtest.save', 'uses' => 'CartController@createApi']);

Route::post('/layouts/', ['as' => 'layouts.save', 'uses' => 'CartController@store']);
Route::post('/cart/add', ['as' => 'cart.add', 'uses' => 'CartController@add']);

Route::middleware(['auth'])->group(function () {

    Route::get('/post/index', ['as' => 'post.index', 'uses' => 'PostController@index']);
    Route::get('/post/create', ['as' => 'post.create', 'uses' => 'PostController@create']);
    Route::post('/post/create', ['as' => 'post.save', 'uses' => 'PostController@store']);

    Route::get('/book/info', ['as' => 'book.info', 'uses' => 'BookController@getSupplier']);

    Route::post('/addPostWishList', ['as' => 'add.post', 'uses' => 'WishListController@createPost']);

});
// TEST TRANG QUAN TRI

// Route::get('/donhangban', function () {
//     return view('admin.donhang.donhangban');
// });
// Route::get('/donhangthue', function () {
//     return view('admin.donhang.donhangthue');
// });
// Route::get('/gocsachbaidang', function () {
//     return view('admin.gocsach.gocsachbaidang');
// });
// Route::get('/gocsachdanhsach', function () {
//     return view('admin.gocsach.gocsachdanhsach');
// });
// Route::get('/gocsachthanhvien', function () {
//     return view('admin.gocsach.gocsachthanhvien');
// });
Route::get('/khachban', function () {
    return view('admin.khachhang.khachban');
});
// Route::get('/khachchothue', function () {
//     return view('admin.khachhang.khachchothue');
// });
// Route::get('/khachmua', function () {
//     return view('admin.khachhang.khachmua');
// });
// Route::get('/khachthue', function () {
//     return view('admin.khachhang.khachthue');
// });
// Route::get('/danhsachquantri', function () {
//     return view('admin.quantrivien.danhsachquantri');
// });
// Route::get('/themquantri', function () {
//     return view('admin.quantrivien.themquantri');
// });
// Route::get('/sachban', function () {
//     return view('admin.sachban.sachban');
// });
// Route::get('/themsachban', function () {
//     return view('admin.sachban.themsachban');
// });
// Route::get('/sachthue', function () {
//     return view('admin.sachthue.sachthue');
// });
// Route::get('/themsachthue', function () {
//     return view('admin.sachthue.themsach');
// });

// TEST GIAO DIEN
// Route::get('/trangchu', function () {
//     return view('BSO.trangchu');
// });
// Route::get('/dangky', function () {
//     return view('BSO.login.dangky');
// });
// Route::get('/dangnhap', function () {
//     return view('BSO.login.dangnhap');
// });
// Route::get('/gocsach', function () {
//     return view('BSO.gocsach.gocsach');
// });
// Route::get('/gocsachchitiet', function () {
//     return view('BSO.gocsach.gocsachchitiet');
// });
// Route::get('/muasach', function () {
//     return view('BSO.muasach.muasach');
// });
// Route::get('/muasachchitiet', function () {
//     return view('BSO.muasach.muasachchitiet');
// });
// Route::get('/thuesach', function () {
//     return view('BSO.thuesach.thuesach');
// });
// Route::get('/thuesachchitiet', function () {
//     return view('BSO.thuesach.thuesachchitiet');
// });
