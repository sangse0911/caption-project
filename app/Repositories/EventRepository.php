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
     * [getEventReady description]
     * @return [type] [description]
     */
    public function getEventReady()
    {
        return Event::where('status', '=', '1')->get();
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
    public function create($data)
    {

        $event = new Event;

        $event->admin_id = Auth::user()->id;
        $event->title = $data['title'];
        $event->description = $data['description'];
        $event->status = $data['status'];
        $event->start = $data['start'];
        $event->end = $data['end'];

        $images = Input::hasFile('images');
        //save image
        if ($images) {

            $path = $this->imageRepository->saveEvent();

            $event->path = $path;
        }

        return $event->save();

    }

    public function modified($data)
    {
        $event = Event::findOrFail($data['id']);

        $event->admin_id = Auth::user()->id;
        $event->title = $data['title'];
        $event->description = $data['description'];
        $event->status = $data['status'];
        $event->start = $data['start'];
        $event->end = $data['end'];

        return $event->save();
    }
}
