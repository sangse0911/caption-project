<?php

namespace App\Interfaces;

interface SupplierInterface
{
    public function getAll();
    public function getById();
    public function save($request);
}
