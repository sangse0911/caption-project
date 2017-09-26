<?php

namespace App\Interfaces;

interface StatusInterface
{
    public function getAll();
    public function getById();
    public function save($request);
}
