<?php

namespace App\Interfaces;

interface InvoiceInterface
{
    public function getAll();
    public function getById();
    public function save($request);
}
