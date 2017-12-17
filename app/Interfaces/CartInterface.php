<?php

namespace App\Interfaces;

interface CartInterface
{
    public function all();
    public function find($id);
    public function add($data);
    public function create($data);
    public function delete($id);
}
