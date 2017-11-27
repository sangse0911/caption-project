<?php

namespace App\Http\Controllers;

use App\Interfaces\CartInterface;
use App\Models\Book;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    protected $cartRepository;

    public function __construct(CartInterface $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('layouts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function add($id)
    {
        $book = Book::find($id)->first();

        Cart::add([
            'id' => $id,
            'name' => $book->name,
            'qty' => 1,
            'price' => $book->price,
            'option' => [
                'image' => $book->images[0]->path,
            ],
        ]);
        $content = Cart::content();
        print_r($content);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "a";
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
