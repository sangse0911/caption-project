<?php

namespace App\Services;

use App\Interfaces\PostInterface;
use App\Models\Post;

class PostService implements PostInterface
{
    public function getAll()
    {
        $posts = Post::all();
        return $posts;
    }

    public function getById($id)
    {

    }

    public function save()
    {

    }
}
