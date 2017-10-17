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

    }

    /**
     * [createIfExist description]
     *
     * @param  array  $request [description]
     * @return [type]          [description]
     */
    public function createIfExist(array $request)
    {
        $user = $this->userRepository->find($request['user-id']);

        $supplier = $user->suppliers()->create([
            'phone' => $request['phone'],
            'user_id' => $user->id,
        ]);

        return $supplier;
    }

    /**
     * [create description]
     *
     * @param  array  $request [description]
     * @return [type]          [description]
     */
    public function create(array $request)
    {
        $user = $this->userRepository->create($request);

        $supplier = $user->suppliers()->create([
            'phone' => $request['phone'],
            'user_id' => $user->id,
        ]);
        return $supplier;
    }
}
