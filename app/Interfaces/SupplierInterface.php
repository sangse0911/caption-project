<?php

namespace App\Interfaces;

interface SupplierInterface
{
    public function all();
    public function find($id);
    public function create($data);
    public function createIfExistUser($data);
    public function detail($id);
}
