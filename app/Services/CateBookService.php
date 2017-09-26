<?php

namespace App\Services;

use App\Interfaces\BookInterface;
use App\Interfaces\CateBookInterface;
use App\Models\CateBook;

class CateBookService implements CateBookInterface, BookInterface
{

    public function getAll()
    {
        $cateBooks = CateBook::paginate(20);
        return $cateBooks;
    }

    public function getById()
    {

    }

    public function save($request)
    {

    }
}
