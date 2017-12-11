<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\StoreUpdateBookAdminRequest;
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
     * [getSellBook description]
     * @return [type] [description]
     */
    public function getSellBook()
    {
        $books = $this->bookRepository->getAllSellBook();
        return view('book.sell-book', compact('books'));
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
     * [getRentBook description]
     * @return [type] [description]
     */
    public function getRentBook()
    {
        $books = $this->bookRepository->getAllRentBook();
        return view('book.renter-book', compact('books'));
    }

    /**
     * [recentlyBook description]
     * @return [type] [description]
     */
    public function recentlyBook()
    {
        $books = $this->bookRepository->getRecentlyBook();
        return view('particals.recently', compact('books'));
    }

    /**
     * [getPostBook description]
     * @return [type] [description]
     */
    public function getPostBook()
    {
        $books = $this->bookRepository->getPostBook();
        return view('book.post_book', compact('books'));
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
    public function store(StoreBookRequest $request)
    {

        if ($request->ajax()) {
            $data = $request->all();
            $book = $this->bookRepository->create($data);

            return response()->json($book, 200);
        }

    }

    /**
     * [storeIfOwned description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function storeIfOwned(StoreBookRequest $request)
    {

        if ($request->ajax()) {
            $data = $request->all();
            $book = $this->bookRepository->createOwnerBook($data);

            return response()->json($book, 200);
        }
    }

    /**
     * [storePostBook description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function storePostBook(StorePostRequest $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $book = $this->bookRepository->createPostBook($data);

            return response()->json($book, 200);
        }
    }

    /**
     * [storeSaleBook description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function storeSaleBook(StoreSaleRequest $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $book = $this->bookRepository->bookForSale($data);

            return response()->json($book, 200);
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
    public function update(StoreUpdateBookAdminRequest $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $book = $this->bookRepository->modified($data);

            return response()->json($book, 200);
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
        //
    }
}
