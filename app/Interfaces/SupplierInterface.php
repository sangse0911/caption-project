<?php

namespace App\Interfaces;

interface SupplierInterface
{
    public function all();
    public function find($id);
    public function create(array $request);
}
