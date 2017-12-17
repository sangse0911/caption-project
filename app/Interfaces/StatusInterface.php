<?php

namespace App\Interfaces;

interface StatusInterface
{
    public function all();
    public function find($id);
    public function create($request);
}
