<?php

namespace App\Http\ViewComposers;

use App\Interfaces\BookInterface;
use Illuminate\View\View;

class BookComposer
{

    protected $bookRepository;

    /**
     *  Bind
     *
     * @param BookInterface     $bookRepository
     */
    public function __construct(BookInterface $bookRepository)
    {

        $this->bookRepository = $bookRepository;
    }

    /**
     *
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('books', $this->bookRepository->all());
    }
}
