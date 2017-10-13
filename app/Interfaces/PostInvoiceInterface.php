<?php

namespace App\Interfaces;

interface PostImageInterface
{
    public function all();
    public function find($id);
    public function create($request);
}
