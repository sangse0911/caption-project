<?php

namespace App\Http\ViewComposers;

use App\Interfaces\CartInterface;
use Illuminate\View\View;

class CartComposer
{

    protected $cartRepository;

    /**
     * [__construct description]
     * @param CategoryInterface $categoryRepository [description]
     */
    public function __construct(CartInterface $cartRepository)
    {

        $this->cartRepository = $cartRepository;
    }

    /**
     * [compose description]
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with(['content', 'total'], $this->cartRepository->all());
    }
}
