<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\Interfaces\WishlistInterface;
use App\Models\Book;
use App\Models\WishList;

class WishListRepository implements WishlistInterface
{

    protected $userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /**
     * [all description]
     * @return [type] [description]
     */
    public function all()
    {
        return Wishlist::all();
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {

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

    /**
     * [getByUser description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getByUser($id)
    {
        $user = $this->userRepository->find($id);

        $wishlists = $user->wishlists()->where('user_id', $id)->paginate(5);
        // dd($wishlists->book_id);
        $books = [];
        foreach ($wishlists as $wishlist) {
            $book = Book::find($wishlist->book_id);
            $books[] = $book;
        }

        return $books;
    }
}
