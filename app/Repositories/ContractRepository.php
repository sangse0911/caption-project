<?php

namespace App\Repositories;

use App\Interfaces\AdminInterface;
use App\Interfaces\ContractInterface;
use App\Models\Contract;
use Auth;

class ContractRepository implements ContractInterface
{
    protected $adminRepository;

    /**
     * [__construct description]
     * @param AdminInterface $adminRepository [description]
     */
    public function __construct(AdminInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    /**
     * [all description]
     * @return [type] [description]
     */
    public function all()
    {
        return Contract::all();
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        return Contract::findOrFail($id);
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
                'kind' => $data['kind'],
            ]);

        $contract = Contract::where('contracts.admin_id', '=', $admin->id)
            ->orderBy('created_at', 'desc')
            ->first();

        return $contract;
    }
}
