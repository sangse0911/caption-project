<?php

namespace App\Interfaces;

interface BookInterface
{
    public function getAll();
    public function getById($id);
    public function save($request);
}
