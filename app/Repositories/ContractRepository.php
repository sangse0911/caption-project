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

    /**
     * [create description]
     * @param  array  $request [description]
     * @return [type]          [description]
     */
    public function create(array $request)
    {

        $supplierId = $request['supplier-id'];
        $adminId = $this->adminRepository->getAdminAuth();
        $admin = Admin::find($adminId);

        $admin->suppliers()->attach($supplierId, [
            'payment_method' => $request['method'],
            'bank_account' => $request['credit'],
            'status' => $request['status'],
        ]);

        $contract = Contract::where('contracts.admin_id', '=', $admin->id)
            ->orderBy('created_at', 'desc')
            ->first();

        return $contract;
    }
}
