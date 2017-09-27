<?php

namespace App\Services;

use App\Interfaces\SupplierInterface;
use App\Interfaces\UserInterface;
use App\Models\Supplier;
use App\Models\User;

class SupplierService implements SupplierInterface
{

    protected $userService;

    public function __construct(UserInterface $userService)
    {
        $this->userService = $userService;
    }
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
        $user = $this->userService->save($request);

        $supplier = new Supplier;

        $supplier->phone = $request['phone'];
        $supplier->user()->associate($user);

        $supplier->save();
        return $supplier;
    }
}
