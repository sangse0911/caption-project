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
        return DetailOrder::create(
            [
                'book_id' => $book->id,
                'order_id' => $order_id,
                'quantity' => 1,
                'fee' => $data['fee'],
                'discount' => $data['discount'],
                'total_price' => 0,
            ]);

    }
}
