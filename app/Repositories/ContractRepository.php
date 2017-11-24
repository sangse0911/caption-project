<?php

namespace App\Repositories;

use App\Interfaces\AdminInterface;
use App\Interfaces\ContractInterface;
use App\Models\Contract;
use Auth;

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
    public function create($data)
    {

        $supplierId = $data['id'];

        $admin = Auth::user();

        $admin->suppliers()->attach($supplierId,
            [
                'method' => $data['method'],
                'account' => $data['account'],
                'status' => $data['status'],
            ]);

        $contract = Contract::where('contracts.admin_id', '=', $admin->id)
            ->orderBy('created_at', 'desc')
            ->first();

        return $contract;
    }
}
