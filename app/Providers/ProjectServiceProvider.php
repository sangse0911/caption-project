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
        view()->composer(['book.create'], 'App\Http\ViewComposers\CategoryComposer');
        view()->composer(['book.create', 'bookself.create'], 'App\Http\ViewComposers\AdminComposer');
        view()->composer('book.create', 'App\Http\ViewComposers\BookselfComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\App\Interfaces\UserInterface::class, \App\Repositories\UserRepository::class);
        $this->app->singleton(\App\Interfaces\SupplierInterface::class, \App\Repositories\SupplierRepository::class);
        $this->app->singleton(\App\Interfaces\BookselfInterface::class, \App\Repositories\BookselfRepository::class);
        $this->app->singleton(\App\Interfaces\AdminInterface::class, \App\Repositories\AdminRepository::class);
        $this->app->singleton(\App\Interfaces\InvoiceInterface::class, \App\Services\InvoiceService::class);
        $this->app->singleton(\App\Interfaces\CategoryInterface::class, \App\Repositories\CategoryRepository::class);
        $this->app->singleton(\App\Interfaces\StatusInterface::class, \App\Services\StatusService::class);
        $this->app->singleton(\App\Interfaces\ImageInterface::class, \App\Services\ImageService::class);
        $this->app->singleton(\App\Interfaces\BookInterface::class, \App\Repositories\BookRepository::class);
        $this->app->singleton(\App\Interfaces\CateBookInterface::class, \App\Services\CateBookService::class);
        $this->app->singleton(\App\Interfaces\InvoiceDetailInterface::class, \App\Services\InvoiceDetailService::class);
        $this->app->singleton(\App\Interfaces\PostInterface::class, \App\Services\PostService::class);
    }
}
