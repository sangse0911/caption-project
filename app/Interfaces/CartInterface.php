<?php

namespace App\Interfaces;

interface CartInterface
{
    public function all();
    public function find($id);
    public function create($data);
}
