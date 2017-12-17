<?php

namespace App\Repositories;

use App\Interfaces\OrderDetailInterface;
use App\Models\DetailOrder;

class OrderDetailRepository implements OrderDetailInterface
{
    public function all()
    {
        return DetailOrder::all();
    }
    public function find($id)
    {

    }
    public function create()
    {
        return DetailOrder::create();
    }
}
