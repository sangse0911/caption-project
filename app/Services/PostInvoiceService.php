<?php

namespace App\Services;

use App\Interfaces\PostInvoiceInterface;
use App\Models\PostInvoice;

class PostInvoiceService implements PostInvoiceInterface
{
    public function getAll()
    {
        $postInvoices = PostInvoice::all();
        return $postInvoices;
    }
    public function getById($id)
    {

    }
    public function save($request)
    {

    }
}
