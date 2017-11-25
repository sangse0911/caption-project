<?php

namespace App\Repositories;

use App\Interfaces\WishlistInterface;
use App\Models\Book;
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

    /**
     * [createWishlistPost description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function createWishlistPost($data)
    {

        $post = Post::find($data['post_id']);
        $userId = $data['user_id'];

        return $post->wishLists()->create([
            'user_id' => $userId,
            'wishListable_id' => $post->id,
        ]);
    }

    /**
     * [createWishlistBook description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function createWishlistBook($data)
    {
        $book = Book::find($data['bookId']);
        $userId = $data['userId'];

        return $book->wishLists()->create([
            'user_id' => $userId,
            'wishListable_id' => $book->id,
        ]);
    }
}
