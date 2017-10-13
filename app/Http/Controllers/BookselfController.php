<?php

namespace App\Http\Controllers;

use App\Interfaces\BookselfInterface;
use Illuminate\Http\Request;

class BookselfController extends Controller
{
    //
    protected $bookselfRepository;

    /**
     * [__construct description]
     * @param BookSelfInterface $bookselfService [description]
     */
    public function __construct(BookselfInterface $bookselfRepository)
    {
        $this->bookselfRepository = $bookselfRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookselfs = $this->bookselfRepository->all();
        return view('bookself.index', compact('bookselfs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookself.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookself = $this->bookselfRepository->create($request->all());
        return redirect()->route('bookself.index');
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
     * [getStatus description]
     * @return [type] [description]
     */
    public function getStatus($slug)
    {
        $bookselfs = $this->bookselfService->getByStatus($slug);
        return view('bookself.single', compact('bookselfs'));
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
