<?php

namespace App\Http\ViewComposers;

use App\Interfaces\CategoryInterface;
use Illuminate\View\View;

class CategoryComposer
{

    protected $categoryService;

    /**
     * [__construct description]
     * @param BookInterface     $bookService     [description]
     */
    public function __construct(

        CategoryInterface $categoryService
    ) {

        $this->categoryService = $categoryService;
    }

    /**
     * [compose description]
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->categoryService->getAll());
    }
}
