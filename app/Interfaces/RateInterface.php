<?php

namespace App\Interfaces;

interface RateInterface
{
    public function all();
    public function find($id);
    public function create($data);
}
