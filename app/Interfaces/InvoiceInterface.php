<?php

namespace App\Interfaces;

interface InvoiceInterface
{
    public function all();
    public function find($id);
    public function create($request);
}
