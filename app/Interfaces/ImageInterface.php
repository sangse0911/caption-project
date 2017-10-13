<?php

namespace App\Interfaces;

interface ImageInterface
{
    public function all();
    public function find($id);
    public function create();
}
