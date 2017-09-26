<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
        View::composer(['admin.index', 'bookself.create', 'supplier.create', 'book.create'],
            'App\Http\ViewComposers\ProfileComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\App\Interfaces\UserInterface::class, \App\Services\UserService::class);
        $this->app->singleton(\App\Interfaces\SupplierInterface::class, \App\Services\SupplierService::class);
        $this->app->singleton(\App\Interfaces\BookselfInterface::class, \App\Services\BookselfService::class);
        $this->app->singleton(\App\Interfaces\AdminInterface::class, \App\Services\AdminService::class);
        $this->app->singleton(\App\Interfaces\InvoiceInterface::class, \App\Services\InvoiceService::class);
        $this->app->singleton(\App\Interfaces\CategoryInterface::class, \App\Services\CategoryService::class);
        $this->app->singleton(\App\Interfaces\StatusInterface::class, \App\Services\StatusService::class);
        $this->app->singleton(\App\Interfaces\ImageInterface::class, \App\Services\ImageService::class);
    }
}
