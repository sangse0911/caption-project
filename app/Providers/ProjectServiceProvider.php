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
        view()->composer(['book.index', 'admin.books.index', 'admin.index'], 'App\Http\ViewComposers\BookComposer');
        view()->composer(['book.create', 'particals.nav-bar-v2', 'admin.books.index', 'particals.header-v2', 'particals.categories', 'categories.content', 'post.content-post', 'particals.sidebar', 'post.index', 'book.sell-book', 'admin.categories.index', 'admin.books.sell-book', 'admin.books.rent-book'], 'App\Http\ViewComposers\CategoryComposer');
        view()->composer(['book.create', 'admin.books.index'], 'App\Http\ViewComposers\AdminComposer');
        view()->composer(['book.create', 'supplier.index', 'admin.books.index', 'admin.books.sell-book', 'admin.books.rent-book'], 'App\Http\ViewComposers\BookshelfComposer');
        view()->composer(['supplier.create', 'admin.index'], 'App\Http\ViewComposers\UserComposer');
        view()->composer('particals.first-page', 'App\Http\ViewComposers\SellBookComposer');
        view()->composer('particals.recently', 'App\Http\ViewComposers\RecentlyBookComposer');
        view()->composer('particals.second-page', 'App\Http\ViewComposers\RentBookComposer');
        view()->composer('particals.event', 'App\Http\ViewComposers\EventComposer');
        view()->composer('book.post_book', 'App\Http\ViewComposers\PostBookComposer');
        view()->composer('particals.best-sell', 'App\Http\ViewComposers\BestSellComposer');
        view()->composer('particals.footer', '\App\Http\ViewComposers\ContactComposer');
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
        $this->app->singleton(\App\Interfaces\BookshelfInterface::class, \App\Repositories\BookshelfRepository::class);
        $this->app->singleton(\App\Interfaces\CategoryInterface::class, \App\Repositories\CategoryRepository::class);
        $this->app->singleton(\App\Interfaces\ImageInterface::class, \App\Repositories\ImageRepository::class);
        $this->app->singleton(\App\Interfaces\BookInterface::class, \App\Repositories\BookRepository::class);
        $this->app->singleton(\App\Interfaces\ContractInterface::class, \App\Repositories\ContractRepository::class);
        $this->app->singleton(\App\Interfaces\ImagePostInterface::class, \App\Repositories\ImagePostRepository::class);
        $this->app->singleton(\App\Interfaces\WishListInterface::class, \App\Repositories\WishListRepository::class);
        $this->app->singleton(\App\Interfaces\EventInterface::class, \App\Repositories\EventRepository::class);
        $this->app->singleton(\App\Interfaces\RoleInterface::class, \App\Repositories\RoleRepository::class);
        $this->app->singleton(\App\Interfaces\ContactInterface::class, \App\Repositories\ContactRepository::class);
        $this->app->singleton(\App\Interfaces\PostInterface::class, \App\Repositories\PostRepository::class);
        $this->app->singleton(\App\Interfaces\RateInterface::class, \App\Repositories\RateRepository::class);
        $this->app->singleton(\App\Interfaces\ReviewInterface::class, \App\Repositories\ReviewRepository::class);
        $this->app->singleton(\App\Interfaces\CartInterface::class, \App\Repositories\CartRepository::class);
        $this->app->singleton(\App\Interfaces\OrderInterface::class, \App\Repositories\OrderRepository::class);
        $this->app->singleton(\App\Interfaces\OrderDetailInterface::class, \App\Repositories\OrderDetailRepository::class);
    }
}
