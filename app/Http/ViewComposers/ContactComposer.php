<?php

namespace App\Http\ViewComposers;

use App\Interfaces\ContactInterface;
use Illuminate\View\View;

class ContactComposer
{

    protected $contactRepository;

    /**
     * [__construct description]
     * @param BookInterface     $bookService     [description]
     */
    public function __construct(

        ContactInterface $contactRepository
    ) {

        $this->contactRepository = $contactRepository;
    }

    /**
     * [compose description]
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('contacts', $this->contactRepository->getAll());
    }
}
