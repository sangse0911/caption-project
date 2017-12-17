<?php

namespace App\Http\ViewComposers;

use App\Interfaces\UserInterface;
use Illuminate\View\View;

class UserComposer
{

    protected $userRepository;

    public function __construct(

        UserInterface $userRepository
    ) {

        $this->userRepository = $userRepository;
    }

    /**
     * [compose description]
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('users', $this->userRepository->all());
    }
}
