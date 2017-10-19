<?php

namespace App\Repositories;

use App\Interfaces\WishlistInterface;
use App\Models\Post;
use App\Models\WishList;

class WishListRepository implements WishlistInterface
{

    public function all()
    {
        return Wishlist::all();
    }
    public function find($id)
    {

    }

    public function createPost($request)
    {

        $post = Post::find($request['post_id']);
        $userId = $request['user_id'];

        $wishlist = new Wishlist;

        $post->wishLists()->create(array('user_id' => $userId, 'wishListable_id' => $post->id));
    }
}
