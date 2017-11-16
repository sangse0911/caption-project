<?php

namespace App\Repositories;

use App\Interfaces\EventInterface;
use App\Models\Event;

class EventRepository implements EventInterface
{
    public function getAll()
    {
        return Event::all();
    }

    public function find($id)
    {
        return Event::findOrFail($id);
    }

    public function create($request)
    {
        return Event::create($request);
    }
}
