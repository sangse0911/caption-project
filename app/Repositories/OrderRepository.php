<?php

namespace App\Repositories;

use App\Interfaces\OrderInterface;
use App\Models\Order;

class OrderRepository implements OrderInterface
{
    /**
     * [all description]
     * @return [type] [description]
     */
    public function all()
    {
        return Order::all();
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        return Order::findOrFail($id);
    }

    /**
     * [create description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data)
    {
        // dd($data);
        return Order::create([
            'user_id' => $data['user_id'],
            'method' => $data['method'],
            'status' => $data['status'],
            'address' => $data['address'],
        ]);
    }

    public function getOrder()
    {

        $books = Order::with([

            'books' => function ($query) {
                $query->whereHas('contracts', function ($q) {
                    $q->where('kind', '0');
                });
            }])->get();

        return $books;
    }
}
