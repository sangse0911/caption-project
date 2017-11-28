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
        return Order::create($data);
    }
}
