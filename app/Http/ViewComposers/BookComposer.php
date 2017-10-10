<?php

namespace App\Http\ViewComposers;

use App\Interfaces\BookInterface;
use Illuminate\View\View;

class BookComposer
{

    protected $bookService;

    /**
     * [__construct description]
     * @param BookInterface     $bookService     [description]
     */
    public function __construct(

        BookInterface $bookService
    ) {

        $this->bookService = $bookService;
    }

    /**
     * [compose description]
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('books', $this->bookService->getAll());
    }
}
