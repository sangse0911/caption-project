<?php

namespace App\Http\ViewComposers;

use App\Interfaces\EventInterface;
use Illuminate\View\View;

class EventComposer
{

    protected $eventRepository;

    /**
     * [__construct description]
     * @param CategoryInterface $eventRepository [description]
     */
    public function __construct(EventInterface $eventRepository)
    {

        $this->eventRepository = $eventRepository;
    }

    /**
     * [compose description]
     * @param  View   $view [description]
     * @return [type]       [description]
     */
    public function compose(View $view)
    {
        $view->with('events', $this->eventRepository->getEventReady());
    }
}
