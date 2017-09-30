<?php

namespace App\Http\ViewComposers;

use App\Interfaces\AdminInterface;
use App\Interfaces\BookInterface;
use App\Interfaces\BookselfInterface;
use App\Interfaces\CategoryInterface;
use App\Interfaces\SupplierInterface;
use App\Interfaces\UserInterface;
use Illuminate\View\View;

class ProfileComposer
{

    protected $userService;
    protected $bookselfService;
    protected $adminService;
    protected $supplierService;
    protected $categoryService;
    protected $bookService;

    /**
     * [__construct description]
     * @param UserInterface     $userService     [description]
     * @param BookselfInterface $bookselfService [description]
     * @param AdminInterface    $adminService    [description]
     * @param SupplierInterface $supplierService [description]
     * @param CategoryInterface $categoryService [description]
     * @param BookInterface     $bookService     [description]
     */
    public function __construct(
        UserInterface $userService,
        BookselfInterface $bookselfService,
        AdminInterface $adminService,
        SupplierInterface $supplierService,
        CategoryInterface $categoryService,
        BookInterface $bookService
    ) {
        $this->userService = $userService;
        $this->bookselfService = $bookselfService;
        $this->adminService = $adminService;
        $this->supplierService = $supplierService;
        $this->categoryService = $categoryService;
        $this->bookService = $bookService;
    }

    /**
     * [compose description]
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('users', $this->userService->getAll());
        $view->with('suppliers', $this->supplierService->getAll());
        $view->with('authId', $this->adminService->getAuth());
        $view->with('categories', $this->categoryService->getAll());
        $view->with('bookself', $this->bookselfService->getFirst());
        $view->with('books', $this->bookService->getAll());
    }
}
