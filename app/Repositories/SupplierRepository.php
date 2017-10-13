<?php

namespace App\Repositories;

use App\Interfaces\SupplierInterface;
use App\Interfaces\UserInterface;
use App\Models\Supplier;

class SupplierRepository implements SupplierInterface
{

    protected $userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function all()
    {
        return Supplier::all();
    }

    public function find($id)
    {

    }

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
