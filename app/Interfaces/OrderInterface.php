<?php

namespace App\Interfaces;

interface OrderInterface
{
    public function all();
    public function find($id);
    public function create($data);
}
