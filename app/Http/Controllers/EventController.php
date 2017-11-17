<?php

namespace App\Http\Controllers;

use App\Interfaces\EventInterface;
use App\Interfaces\ImageInterface;
use App\Models\Event;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EventController extends Controller
{

    protected $eventRepository;
    protected $imageRepository;
    public function __construct(
        EventInterface $eventRepository,
        ImageInterface $imageRepository
    ) {
        $this->eventRepository = $eventRepository;
        $this->imageRepository = $imageRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = $this->eventRepository->getAll();
        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->ajax()) {
            $event = new Event;

            $event->admin_id = Auth::user()->id;
            $event->title = $request->get('title');
            $event->description = $request->get('description');
            $event->status = $request->get('status');

            $images = Input::hasFile('images');
            //save image
            if ($images) {
                $filesArray = $this->imageRepository->saveEvent();
                if (!$event->createMany($filesArray)) {
                    return $result = false;
                };
            }
            // $event->image_path = $filesArray;
            $event->save();
        }

        return response($event);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
