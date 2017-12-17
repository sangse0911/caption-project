<?php

namespace App\Interfaces;

interface BookshelfInterface
{
    public function all();
    public function find($id);
    public function create($request);
    public function first();
    public function modified($data);
}
