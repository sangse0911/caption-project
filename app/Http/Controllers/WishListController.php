<?php

namespace App\Http\Controllers;

use App\Interfaces\WishListInterface;
use App\Models\Post;
use App\Models\WishList;
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
    public function createPost(Request $request)
    {

        if ($request->ajax()) {
            $user_id = $request->userId;
            $post_id = $request->postId;

            $post = Post::find($post_id);

            $wishlist = new Wishlist;

            $wishlist = $post->wishlists()->create(['user_id' => $user_id, 'post_id' => $post_id]);

        }
        return response($wishlist);
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