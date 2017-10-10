<?php

namespace App\Http\ViewComposers;

use App\Interfaces\BookselfInterface;
use Illuminate\View\View;

class BookselfComposer
{

    protected $bookselfService;

    /**
     * [__construct description]
     * @param BookInterface     $bookService     [description]
     */
    public function __construct(BookselfInterface $bookselfService)
    {

        $this->bookselfService = $bookselfService;
    }

    /**
     * [compose description]
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('bookself', $this->bookselfService->getFirst());
    }
}
