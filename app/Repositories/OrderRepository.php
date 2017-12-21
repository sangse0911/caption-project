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
        $orders = Order::with([
            'user',
            'detailOrders',
            'books' => function ($query) {
                $query->whereHas('contracts', function ($q) {
                    $q->where('kind', '=', '0');
                });
            }])
            ->groupBy('id')
            ->get();
        return $orders;
    }

    public function getOrderById($id)
    {
        $orders = Order::with([
            'user',
            'detailOrders',
            'books',
        ])->findOrFail($id);

        return $orders;
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
            }])->get();

        return $books;
    }

    /**
     * [getOrderByUser description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getOrderByUser($id)
    {

        $orders = Order::where('user_id', $id)->get();
        return $orders;
    }

    /**
     * change order status
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function modified($data)
    {
        $order = Order::findOrFail($data['id']);

        $order->status = $data['status'];
        return $order->save();
    }

    /**
     * [getNewOrder description]
     * @return [type] [description]
     */
    public function getNewOrder()
    {
        $orders = Order::where('status', '0')->count();

        return $orders;
    }

}
