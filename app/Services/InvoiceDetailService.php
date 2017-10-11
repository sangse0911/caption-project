<?php

namespace App\Services;

use App\Interfaces\InvoiceDetailInterface;
use App\Models\InvoiceDetail;

class InvoiceDetailService implements InvoiceDetailInterface
{
    public function getAll()
    {
        $invoiceDetails = InvoiceDetail::paginate(20);
        return $invoiceDetails;
    }

    public function getById()
    {

    }

    public function save($request)
    {
        $invoiceDetail = new InvoiceDetail;

        $invoiceDetail->entered_price = $request['price-entered'];
        $invoiceDetail->sell_price = $request['price-sell'];
        $invoiceDetail->rental_price = $request['price-rent'];
        $invoiceDetail->quanlity = $request['quanlity'];

        return $invoiceDetail;
    }
}
