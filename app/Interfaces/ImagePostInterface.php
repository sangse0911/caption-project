<?php

namespace App\Interfaces;

interface ImagePostInterface
{
    public function all();
    public function find($id);
    public function save();
}
