<?php

namespace App\Interfaces;

interface WishListInterface
{
    public function all();
    public function find($id);
    public function createWishlistBook($data);
    public function getByUser($id);
}
