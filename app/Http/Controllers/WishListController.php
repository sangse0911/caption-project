<?php

namespace App\Http\Controllers;

use App\Interfaces\WishListInterface;
use Illuminate\Http\Request;

class WishListController extends Controller
{

    protected $wishListRepository;

    public function __construct(WishListInterface $wishListRepository)
    {
        $this->wishListRepository = $wishListRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createWishlistPost(Request $request)
    {

        if ($request->ajax()) {
            $data = $request->all();
            $wishlist = $this->wishListRepository->createWishlistPost($data);

            return response($wishlist, 200);
        }
        return false;
    }

    public function createWishlistBook(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $wishlist = $this->wishListRepository->createWishlistBook($data);

            return response()->json($wishlist, 200);
        }
        return false;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePost(Request $request)
    {
        // $wishlist = $this->wishListRepository->createPost($request->all());
        // dd($wishlist);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = $this->wishListRepository->getByUser($id);

        return view('wishlists.single', compact('books'));
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
