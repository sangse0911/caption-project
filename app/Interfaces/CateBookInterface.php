<?php

namespace App\Interfaces;

interface CateBookInterface
{
    public function all();
    public function find($id);
    public function create($request);
}
