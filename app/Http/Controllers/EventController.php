<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\StoreUpdateEventRequest;
use App\Interfaces\EventInterface;
use App\Interfaces\ImageInterface;
use Illuminate\Http\Request;

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
        $events = $this->eventRepository->getEventReady();
        return view('event.index', compact('events'));
    }

    public function content()
    {
        $events = $this->eventRepository->getAll();
        return view('event.content', compact('events'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {

        if ($request->ajax()) {
            $data = $request->all();
            $event = $this->eventRepository->create($data);

            return response()->json($event, 200);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->eventRepository->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateEventRequest $request)
    {
        if ($request->ajax()) {

            $data = $request->all();
            $event = $this->eventRepository->modified($data);

            return response()->json($event, 200);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = $this->eventRepository->getAll();

        foreach ($events as $event) {
            // if($event->end)
        }
    }
}
