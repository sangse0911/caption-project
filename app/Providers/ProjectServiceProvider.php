<?php

namespace App\Providers;

use App\Interfaces\CategoryInterface;
use Illuminate\Support\ServiceProvider;

class ProjectServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['home', 'book.index'], 'App\Http\ViewComposers\BookComposer');
        view()->composer(['book.create', 'particals.nav-bar-v2'], 'App\Http\ViewComposers\CategoryComposer');
        view()->composer(['book.create', 'bookself.create'], 'App\Http\ViewComposers\AdminComposer');
        view()->composer('book.create', 'App\Http\ViewComposers\BookselfComposer');
        view()->composer('supplier.create', 'App\Http\ViewComposers\UserComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\App\Interfaces\AdminInterface::class, \App\Repositories\AdminRepository::class);
        $this->app->singleton(\App\Interfaces\UserInterface::class, \App\Repositories\UserRepository::class);
        $this->app->singleton(\App\Interfaces\SupplierInterface::class, \App\Repositories\SupplierRepository::class);
        $this->app->singleton(\App\Interfaces\BookselfInterface::class, \App\Repositories\BookselfRepository::class);
        $this->app->singleton(\App\Interfaces\CategoryInterface::class, \App\Repositories\CategoryRepository::class);
        $this->app->singleton(\App\Interfaces\ImageInterface::class, \App\Repositories\ImageRepository::class);
        $this->app->singleton(\App\Interfaces\BookInterface::class, \App\Repositories\BookRepository::class);
        $this->app->singleton(\App\Interfaces\ContractInterface::class, \App\Repositories\ContractRepository::class);
        $this->app->singleton(\App\Interfaces\ImagePostInterface::class, \App\Repositories\ImagePostRepository::class);
        $this->app->singleton(\App\Interfaces\PostInterface::class, \App\Repositories\PostRepository::class);
        $this->app->singleton(\App\Interfaces\WishlistInterface::class, \App\Repositories\WishListRepository::class);
        $this->app->singleton(\App\Interfaces\EventInterface::class, \App\Repositories\EventRepository::class);

    }
}
