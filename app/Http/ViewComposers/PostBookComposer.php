<?php

namespace App\Http\ViewComposers;

use App\Interfaces\PostInterface;
use Illuminate\View\View;

class PostBookComposer
{

    protected $postRepository;

    /**
     *  Bind
     *
     * @param BookInterface     $bookRepository
     */
    public function __construct(PostInterface $postRepository)
    {

        $this->postRepository = $postRepository;
    }

    /**
     *
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('books', $this->postRepository->getAtHome());
    }
}
