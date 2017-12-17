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

        $admin->users()->attach($supplierId,
            [
                'method' => $data['method'],
                'account' => $data['account'],
                'kind' => $data['kind'],
                'status' => '0',
            ]);

        $contract = Contract::where('contracts.admin_id', '=', $admin->id)
            ->orderBy('created_at', 'desc')
            ->first();

        return $contract;
    }

    /**
     * [createIfNoContract description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function createIfNoContract($data)
    {

        $admin = Auth::user();

        $admin->users()->attach(1,
            [
                'method' => $data['method'],
                'account' => $data['account'],
                'kind' => $data['kind'],
                'status' => '0',
            ]);

        $contract = Contract::where('contracts.admin_id', '=', $admin->id)
            ->orderBy('created_at', 'desc')
            ->first();

        return $contract;
    }

    /**
     * [createByUser description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function createByUser($data)
    {

        $user = Auth::user();

        $user->admins()->attach($user->id,
            [
                'method' => $data['method'],
                'account' => $data['account'],
                'kind' => $data['kind'],
                'admin_id' => 1,
                'status' => '1',
            ]
        );

        $contract = Contract::where('contracts.user_id', '=', $user->id)
            ->orderBy('created_at', 'desc')
            ->first();

        return $contract;
    }

    /**
     * [sale description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function sale($data)
    {
        $user = Auth::user();

        $user->admins()->attach($user->id,
            [
                'method' => $data['method'],
                'account' => $data['account'],
                'kind' => $data['kind'],
                'admin_id' => 1,
                'status' => '2',
            ]
        );

        $contract = Contract::where('contracts.user_id', '=', $user->id)
            ->orderBy('created_at', 'desc')
            ->first();

        return $contract;
    }
}
