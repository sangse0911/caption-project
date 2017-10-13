<?php

namespace App\Interfaces;

interface InvoiceDetailInterface
{
    public function all();
    public function find($id);
    public function create($request);
}
