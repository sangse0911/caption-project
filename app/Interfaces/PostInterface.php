<?php

namespace App\Interfaces;

interface PostInterface
{
    public function getAll();
    public function getBYId($id);
    public function save($request);
}
