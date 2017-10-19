<?php

namespace App\Interfaces;

interface WishlistInterface
{
    public function all();
    public function find($id);
    public function createPost($request);
}
