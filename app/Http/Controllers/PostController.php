<?php

namespace App\Http\Controllers;

use App\Interfaces\BookInterface;
use App\Interfaces\PostInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{

    protected $bookRepository;

    public function __construct(
        BookInterface $bookRepository,
        PostInterface $postRepository
    ) {
        $this->bookRepository = $bookRepository;
        $this->postRepository = $postRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = $this->bookRepository->getPostBook();
        return view('post.index', compact('books'));
    }

    public function contentPost()
    {
        $books = $this->bookRepository->getAllPost();
        return view('post.content-post', compact('books'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * [createSale description]
     * @return [type] [description]
     */
    public function createSale()
    {
        return view('post.for-sale');
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
            $post = $this->postRepository->create($data);

            return response()->json($post, 200);
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
        return $this->postRepository->find($id);
    }

    public function getAllPostByUserId($id)
    {
        $books = $this->postRepository->find($id);

        return view('post.single-post', compact('books'));
    }
    /*

     */
    public function showSupplierPost()
    {
        $books = $this->bookRepository->getSupplierBook();
        return view('admin.books.supplier-post', compact('books'));
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
