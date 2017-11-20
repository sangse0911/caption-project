<?php

namespace App\Interfaces;

interface RoleInterface
{

    public function getAll();
    public function create($data);
    public function find($id);
    public function modified($data);
}
