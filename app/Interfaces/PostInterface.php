<?php

namespace App\Interfaces;

interface PostInterface
{
    public function all();
    public function find($id);
    public function create($data);
}
