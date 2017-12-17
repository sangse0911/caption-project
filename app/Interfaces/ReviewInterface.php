<?php

namespace App\Interfaces;

interface ReviewInterface
{
    public function all();
    public function find($id);
    public function create($data);
}
