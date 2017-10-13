<?php

namespace App\Interfaces;

interface BookInterface
{
    public function all();
    public function find($id);
    public function first();
    public function create($request);
}
