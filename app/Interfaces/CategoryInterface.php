<?php

namespace App\Interfaces;

interface CategoryInterface
{
    public function getAll();
    public function getById();
    public function save($request);
}
