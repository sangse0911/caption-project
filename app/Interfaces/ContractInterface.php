<?php

namespace App\Interfaces;

interface ContractInterface
{
    public function all();
    public function find($id);
    public function create(array $request);
}