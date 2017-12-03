<?php

namespace App\Repositories;

use App\Interfaces\OrderInterface;
use App\Models\Order;

class OrderRepository implements OrderInterface
{
    public function all()
    {
        return Order::all();
    }

    public function find($id)
    {

    }

    public function create($data)
    {
        // dd($data);
        return Order::create([
            'user_id' => $data['user_id'],
            'method' => $data['method'],
            'status'=>  $data['status'],
            'address' => $data['address'],
        ]);
    }
}
