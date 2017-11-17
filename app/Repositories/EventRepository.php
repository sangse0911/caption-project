<?php

namespace App\Repositories;

use App\Interfaces\EventInterface;
use App\Interfaces\ImageInterface;
use App\Models\Event;
use Auth;
use Illuminate\Support\Facades\Input;

class EventRepository implements EventInterface
{
    protected $imageRepository;

    /**
     * [__construct description]
     * @param ImageInterface $imageRepository [description]
     */
    public function __construct(ImageInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll()
    {
        return Event::all();
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        return Event::findOrFail($id);
    }

    /**
     * [create description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function create($request)
    {
        if ($request->ajax()) {

            $event = new Event;

            $event->admin_id = Auth::user()->id;
            $event->title = $request['event-name'];
            $event->information = $request['event-detail'];
            $event->status = $request['event-status'];

            $images = Input::hasFile('images');
            //save image
            if ($images) {
                $filesArray = $this->imageRepository->saveEvent();
                if (!$event->createMany($filesArray)) {
                    return $result = false;
                };
            }

            $event->save();
        }

        return $event;

    }
}
