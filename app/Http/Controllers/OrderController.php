<?php

namespace App\Http\Controllers;

use App\Interfaces\OrderInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    protected $orderRepository;

    public function __construct(OrderInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function getRenter()
    {
        $orders = $this->orderRepository->getRenter();
        return view('admin.orders.order-rent', compact('orders'));
    }

    public function getOrder()
    {
        $orders = $this->orderRepository->getOrder();

        return view('admin.orders.order-buy', compact('orders'));
    }

    public function getNewOrder(Request $request)
    {
        if ($request->ajax()) {

            return response()->json($this->orderRepository->getNewOrder(), 200);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * [showOrder description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function showOrder($id)
    {
        return $this->orderRepository->getOrderById($id);
    }

    /**
     * [showOrderOfUser description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function showOrderOfUser($id)
    {

        $orders = $this->orderRepository->getOrderByUser($id);
        return view('users.single-order', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $order = $this->orderRepository->modified($data);

            return response()->json($order, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
