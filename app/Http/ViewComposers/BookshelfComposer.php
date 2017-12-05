<?php

namespace App\Http\ViewComposers;

use App\Interfaces\BookshelfInterface;
use Illuminate\View\View;

class BookshelfComposer
{
    //
    protected $bookshelfRepository;

    /**
     * [__construct description]
     * @param BookselfInterface $bookselfRepository [description]
     */
    public function __construct(BookshelfInterface $bookshelfRepository)
    {

        $this->bookshelfRepository = $bookshelfRepository;
    }

    /**
     * [compose description]
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('bookshelves', $this->bookshelfRepository->getListReadyBookshelf());
    }
}
