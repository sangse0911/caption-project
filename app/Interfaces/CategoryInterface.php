<?php

namespace App\Interfaces;

interface CategoryInterface
{
    public function all();
    public function find($id);
    public function create($data);
}
