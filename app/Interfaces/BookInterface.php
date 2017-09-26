<?php

namespace App\Interfaces;

interface BookInterface
{
    public function getAll();
    public function getById();
    public function save($request);
}
