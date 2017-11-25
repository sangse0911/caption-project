<?php

namespace App\Interfaces;

interface WishListInterface
{
    public function all();
    public function find($id);
    public function createWishlistPost($data);
    public function createWishlistBook($data);
}
