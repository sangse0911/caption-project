<?php

namespace App\Interfaces;

interface InvoiceDetailInterface
{
    public function getAll();
    public function getById();
    public function save($request);
}
