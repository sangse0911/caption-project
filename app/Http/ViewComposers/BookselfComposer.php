<?php

namespace App\Http\ViewComposers;

use App\Interfaces\BookselfInterface;
use Illuminate\View\View;

class BookselfComposer
{
    //
    protected $bookselfRepository;

    /**
     * [__construct description]
     * @param BookselfInterface $bookselfRepository [description]
     */
    public function __construct(BookselfInterface $bookselfRepository)
    {

        $this->bookselfRepository = $bookselfRepository;
    }

    /**
     * [compose description]
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('bookself', $this->bookselfRepository->first());
    }
}
