<?php

namespace App\Http\ViewComposers;

use App\Interfaces\AdminInterface;
use App\Interfaces\BookselfInterface;
use App\Interfaces\SupplierInterface;
use App\Interfaces\UserInterface;
use Illuminate\View\View;

class ProfileComposer
{

    protected $userService;
    protected $bookselfService;
    protected $adminService;
    protected $supplierService;

    public function __construct(
        UserInterface $userService,
        BookselfInterface $bookselfService,
        AdminInterface $adminService,
        SupplierInterface $supplierService
    ) {
        $this->userService = $userService;
        $this->bookselfService = $bookselfService;
        $this->adminService = $adminService;
        $this->supplierService = $supplierService;
    }

    public function compose(View $view)
    {
        $view->with('users', $this->userService->getAll());
        $view->with('suppliers', $this->supplierService->getAll());
        $view->with('authId', $this->adminService->getAuth());
    }
}
