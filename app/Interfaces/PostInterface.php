<?php

namespace App\Interfaces;

interface PostInterface
{
    public function all();
    public function find($id);
    public function create($data);
    public function getAtHome();
    public function modified($data);
    public function getNewPost();
}
