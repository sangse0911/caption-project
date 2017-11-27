<?php

namespace App\Repositories;

use App\Interfaces\CartInterface;
use App\Models\Book;

class CartRepository implements CartInterface
{
    public function all()
    {

    }
    public function find($id)
    {
        $book = Book::find($data['id'])->first();
        return $book;
    }
    public function create($data)
    {
        $book = Book::find($data['id']);
        return $book;
        // Cart::add([
        //     'id' => $data['id'],
        //     'name' => $book->name,
        //     'qty' => 1,
        //     'price' => $book->price,
        //     'option' => [
        //         'image' => $book->images[0]->path,
        //     ],
        // ]);
        // $content = Cart::content();
        // print_r($content);
    }
}
