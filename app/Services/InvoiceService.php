<?php

namespace App\Services;

use App\Interfaces\InvoiceInterface;
use App\Models\Invoice;

class InvoiceService implements InvoiceInterface
{

    public function getAll()
    {
        $invoice = Invoice::paginate(20);
        return $invoice;
    }

    public function getById()
    {

    }

    public function save($request)
    {
        $invoice = new Invoice;

        $invoice->supplier_id = $request['supplier-id'];
        $invoice->payment_method = $request['method'];
        $invoice->bank_account = $request['credit'];
        $invoice->status = $request['status'];

        $invoice->save();

        return $invoice;
    }
}
