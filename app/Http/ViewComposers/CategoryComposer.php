<?php

namespace App\Http\ViewComposers;

use App\Interfaces\CategoryInterface;
use Illuminate\View\View;

class CategoryComposer
{

    protected $categoryRepository;

    /**
     * [__construct description]
     * @param CategoryInterface $categoryRepository [description]
     */
    public function __construct(CategoryInterface $categoryRepository)
    {

        $this->categoryRepository = $categoryRepository;
    }

    /**
     * [compose description]
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->categoryRepository->all());
    }
}
