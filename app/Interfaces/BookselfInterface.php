<?php

namespace App\Interfaces;

interface BookselfInterface
{
    public function all();
    public function find($id);
    public function create($request);
    public function first();
}
