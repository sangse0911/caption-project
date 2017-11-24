<?php

namespace App\Repositories;

use App\Interfaces\SupplierInterface;
use App\Interfaces\UserInterface;
use App\Models\Supplier;

class SupplierRepository implements SupplierInterface
{
    //
    protected $userRepository;

    /**
     * [__construct description]
     * @param UserInterface $userRepository [description]
     */
    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * [all description]
     * @return [type] [description]
     */
    public function all()
    {
        return Supplier::all();
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        return Supplier::find($id);
    }

    /**
     * [createIfExistUser description]
     *
     * @param  array  $request [description]
     * @return [type]          [description]
     */
    public function createIfExistUser($data)
    {
        $user = $this->userRepository->find($data['id']);

        return $supplier = $user->suppliers()->create([
            'phone' => $data['phone'],
            'user_id' => $data['id'],
        ]);

    }

    /**
     * [create description]
     *
     * @param  array  $request [description]
     * @return [type]          [description]
     */
    public function create($data)
    {
        $user = $this->userRepository->create($request);

        $supplier = $user->suppliers()->create([
            'phone' => $request['phone'],
            'user_id' => $user->id,
        ]);
        return $supplier;
    }
}
