<?php

namespace App\Http\ViewComposers;

use App\Interfaces\PostInterface;
use Illuminate\View\View;

class PostComposer
{

    protected $postRepository;

    public function __construct(

        PostInterface $postRepository
    ) {

        $this->postRepository = $postRepository;
    }

    /**
     * [compose description]
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('posts', $this->postRepository->all());
    }
}
