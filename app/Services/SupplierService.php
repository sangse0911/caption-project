<?php

namespace App\Services;

use App\Interfaces\SupplierInterface;
use App\Models\Supplier;

class SupplierService implements SupplierInterface
{
    public function getAll()
    {
        $suppliers = Supplier::paginate(20);
        return $suppliers;
    }

    public function getById()
    {

    }

    public function save($request)
    {
        $supplier = new Supplier;
        $supplier->user_id = $request['user-id'];
        $supplier->phone = $request['phone'];
        $supplier->save();
        return $supplier;
    }
}
