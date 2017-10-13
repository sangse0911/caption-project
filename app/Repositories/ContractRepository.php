<?php

namespace App\Repositories;

use App\Interfaces\AdminInterface;
use App\Interfaces\ContractInterface;
use App\Models\Admin;
use App\Models\Contract;

class ContractRepository implements ContractInterface
{
    protected $adminRepository;

    public function __construct(AdminInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function all()
    {
        return Contract::all();
    }

    public function find($id)
    {

    }

    public function create($request)
    {

        $supplierId = $request['supplier-id'];
        $adminId = $this->adminRepository->getAdminAuth();
        $admin = Admin::find($adminId);

        $admin->suppliers()->attach($supplierId, [
            'payment_method' => $requests['method'],
            'bank_account' => $request['credit'],
            'status' => $request['status'],
        ]);

    }
}
