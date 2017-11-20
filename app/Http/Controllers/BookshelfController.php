<?php

namespace App\Http\Controllers;

use App\Interfaces\BookshelfInterface;
use Illuminate\Http\Request;

class BookshelfController extends Controller
{
    //
    protected $bookshelfRepository;

    /**
     * [__construct description]
     * @param BookSelfInterface $bookselfService [description]
     */
    public function __construct(BookshelfInterface $bookshelfRepository)
    {
        $this->bookshelfRepository = $bookshelfRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookshelfs = $this->bookshelfRepository->all();
        return view('admin.bookshelves.index', compact('bookshelfs'));
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
        if ($request->ajax()) {
            $data = $request->all();
            $bookShelf = $this->bookshelfRepository->create($data);
        }
        return response()->json($bookShelf, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->bookshelfRepository->find($id);
    }

    /**
     * [getStatus description]
     * @return [type] [description]
     */
    public function getStatus($slug)
    {
        // $bookshelfs = $this->bookshelfService->getByStatus($slug);
        // return view('bookself.single', compact('bookselfs'));
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
    public function update(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $bookShelf = $this->bookshelfRepository->modified($data);
        }
        return response()->json($bookShelf, 200);
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
