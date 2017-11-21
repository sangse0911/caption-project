<?php

namespace App\Interfaces;

interface ContactInterface
{

    public function getAll();
    public function find($id);
    public function create($data);
    public function modified($data);
}
