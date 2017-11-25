<?php

namespace App\Interfaces;

interface BookInterface
{
    public function all();
    public function find($id);
    public function getSellBook();
    public function getRentBook();
    public function create($request);
    public function modified($data);
}
