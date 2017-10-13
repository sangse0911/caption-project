<?php

namespace App\Http\ViewComposers;

use App\Interfaces\AdminInterface;
use Illuminate\View\View;

class AdminComposer
{

    protected $adminService;

    /**
     * [__construct description]
     * @param BookInterface     $bookService     [description]
     */
    public function __construct(

        AdminInterface $adminService
    ) {

        $this->adminService = $adminService;
    }

    /**
     * [compose description]
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('authId', $this->adminService->getAdminAuth());
    }
}
