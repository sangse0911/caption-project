<?php

namespace App\Interfaces;

interface EventInterface
{

    public function getAll();
    public function find($id);
    public function create($request);

}
