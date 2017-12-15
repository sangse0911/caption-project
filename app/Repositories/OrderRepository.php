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
            'status' => '0',
            'address' => $data['address'],
            'phone' => $data['phone'],
        ]);
    }

    /**
     * [getOrder description]
     * @return [type] [description]
     */
    public function getOrder()
    {
        $books = Order::with([

            'books' => function ($query) {
                $query->whereHas('contracts', function ($q) {
                    $q->where('kind', '=', '0');
                });
            },
            'user',
            'detailOrders',
        ])->distinct()->get();

        return $books;
    }

    public function getOrderById($id)
    {
        $books = Order::with([
            'user',
            'detailOrders',
            'books',
        ])->findOrFail($id);

        return $books;
    }

    /**
     * [getRenter description]
     * @return [type] [description]
     */
    public function getRenter()
    {
        $books = Order::with([
            'user',
            'detailOrders',
            'books' => function ($query) {
                $query->whereHas('contracts', function ($q) {
                    $q->where('kind', '=', '1');
                });
            }])->distinct()->groupBy('orders.id')->get();

        return $books;
    }

    public function getRenterById($id)
    {

    }

    public function modified($data)
    {
        $order = Order::findOrFail($data['id']);

        $order->status = $data['status'];
        return $order->save();
    }
}
