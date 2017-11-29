<?php

namespace App\Http\Controllers;

use App\Interfaces\BookInterface;
use Illuminate\Http\Request;

class BookController extends Controller
{

    protected $bookRepository;

    public function __construct(BookInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = $this->bookRepository->all();

        return view('book.index', compact('books'));
    }

    /**
     * [hotBook description]
     * @return [type] [description]
     */
    public function hotBook()
    {
        $books = $this->bookRepository->all();

        return view('book.hot-book', compact('books'));
    }

    /**
     * [sellBook description]
     * @return [type] [description]
     */
    public function sellBook()
    {
        $books = $this->bookRepository->getSellBook();
        return response()->json([
            'html' => view('admin.books.sell-book', compact('books'))->render(),
        ]);
    }

    /**
     * [renBook description]
     * @return [type] [description]
     */
    public function rentBook()
    {
        $books = $this->bookRepository->getRentBook();
        return response()->json([
            'html' => view('admin.books.rent-book', compact('books'))->render(),
        ]);
    }

    /**
     * [getSupplier description]
     * @return [type] [description]
     */
    public function getSupplier()
    {
        return $this->bookService->getSupplier();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
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
            $book = $this->bookRepository->create($data);
        }
        return response()->json($book, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->bookRepository->find($id);
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
            $book = $this->bookRepository->modified($data);
        }
        return response()->json($book, 200);
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
