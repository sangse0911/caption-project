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
/**
 *
 */
Route::get('/home', 'HomeController@index')->name('home');

/**
 *
 */
Route::get('/admin', ['as' => 'admin.index', 'uses' => 'AdminController@index'])->middleware('auth:admin');
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
Route::get('/book', ['as' => 'book.index', 'uses' => 'BookController@index']);
Route::get('/book/{id}', 'BookController@show')->name('book.show');
Route::get('/sell-book', ['as' => 'book.sell', 'uses' => 'BookController@sellBook']);
Route::get('/renter-book', ['as' => 'book.renter', 'uses' => 'BookController@renBook']);
Route::get('/hot-book', ['as' => 'book.hot', 'uses' => 'BookController@hotBook']);

/**
 *
 */
Route::get('/content-post', ['as' => 'content.post', 'uses' => 'PostController@contentPost']);
Route::get('/supplier/{id}', ['as' => 'supplier.show', 'uses' => 'SupplierController@show']);

/**
 *
 */
Route::middleware(['auth:admin', 'super_admin'])->group(function () {

    /**
     *
     */
    Route::get('/role', 'RoleController@index')->name('super.admin.index');
    Route::post('/role/store', 'RoleController@store')->name('super.admin.store');
    Route::put('/role/update', 'RoleController@update')->name('super.admin.update');
    Route::get('/role/{id}', 'RoleController@show')->name('super.admin.show');

    /**
     *
     */
    Route::get('/admin/contact', 'ContactController@index')->name('admin.contact.index');
    Route::post('/contact/store', 'ContactController@store')->name('admin.contact.store');
    Route::put('/contact/update', 'ContactController@update')->name('admin.contact.update');
    Route::get('/contact/{id}', 'ContactController@show')->name('admin.contact.show');
});
/**
 *
 */
Route::middleware(['auth:admin'])->group(function () {
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
    Route::get('/admin/bookshelves', 'BookshelfController@index')->name('admin.bookshelf.index');
    Route::post('/bookshelf/store', 'BookshelfController@store')->name('bookshelf.store');
    Route::get('/bookshelf/{id}', 'BookshelfController@show')->name('bookshelf.show');
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
    Route::post('/supplier/create', 'SupplierController@store')->name('supplier.save');
    Route::post('/supplier/createIfExistUser', 'SupplierController@storeIfExist')->name('supplier.save.exist');

    /**
     *
     */
    Route::get('/categories', ['as' => 'categories.index', 'uses' => 'CategoryController@index']);
    Route::get('/categories/create', ['as' => 'category.create', 'uses' => 'CategoryController@create']);
    Route::post('/categories/create', ['as' => 'category.save', 'uses' => 'CategoryController@store']);

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
    Route::put('/book/update', 'BookController@update')->name('book.update');

    /**
     *
     */
    Route::get('/event/create', ['as' => 'event.create', 'uses' => 'EventController@create']);
    Route::post('/event/store', ['uses' => 'EventController@store'])->name('event.store');
    Route::put('/event/update', ['as' => 'event.update', 'uses' => 'EventController@update']);
    Route::get('/event/{id}', ['as' => 'event.show', 'uses' => 'EventController@show']);
    Route::get('/content', ['as' => 'event.content', 'uses' => 'EventController@content']);

    /**
     *
     */
    Route::get('/event', ['as' => 'event.index', 'uses' => 'EventController@index']);
    Route::get('/trangquantri', function () {
        return view('admin.sachban.themsachban');
    });
    Route::get('/themsachban', function () {
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

/**
 *
 */
Route::get('/post/index', ['as' => 'post.index', 'uses' => 'PostController@index']);
Route::get('/post/{id}', 'PostController@show')->name('post.show');

/**
 *
 */
Route::middleware(['auth'])->group(function () {

    /**
     *
     */
    Route::get('/post/create', ['as' => 'post.create', 'uses' => 'PostController@create']);
    Route::post('/post/store', ['as' => 'post.store', 'uses' => 'PostController@store']);

    Route::get('/book/info', ['as' => 'book.info', 'uses' => 'BookController@getSupplier']);

    /**
     *
     */
    Route::post('/addPostWishlist', ['as' => 'add.post.wishlist', 'uses' => 'WishListController@createWishlistPost']);
    Route::post('/addBookWishlist', ['as' => 'add.book.wishlist', 'uses' => 'WishListController@createWishlistBook']);

    Route::post('/addBookRate', 'RateController@store')->name('book.rate');

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
