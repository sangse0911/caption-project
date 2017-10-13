<?php

namespace App\Repositories;

use App\Interfaces\BookInterface;
use App\Models\Book;

class BookRepository implements BookInterface
{

    public function all()
    {
        return Book::all();
    }

    public function find($id)
    {

    }

    public function first()
    {
        return Bookself::where('status', '1')->first();
    }

    public function create($request)
    {

    }
}
