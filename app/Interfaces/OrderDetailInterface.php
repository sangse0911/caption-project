<?php

namespace App\Interfaces;

interface OrderDetailInterface
{
    public function all();
    public function find($id);
    public function create();
}
