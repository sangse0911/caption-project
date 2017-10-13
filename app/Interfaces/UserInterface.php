<?php

namespace App\Interfaces;

interface UserInterface
{
    public function all();
    public function find($id);
    public function create(array $request);
}
