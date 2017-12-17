<?php

namespace App\Repositories;

use App\Interfaces\ReviewInterface;
use App\Models\Review;

class ReviewRepository implements ReviewInterface
{
    public function all()
    {
        return Review::all();
    }
    public function find($id)
    {

    }

    public function create($data)
    {
        return Review::create([
            'user_id' => $data['userId'],
            'book_id' => $data['bookId'],
            'comment' => $data['comment'],
        ]);
    }
}
