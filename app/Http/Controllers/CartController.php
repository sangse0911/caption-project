<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Interfaces\CartInterface;
use App\Interfaces\OrderInterface;
use Auth;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CartController extends Controller
{

    protected $cartRepository;

    public function __construct(
        CartInterface $cartRepository,
        OrderInterface $orderRepository
    ) {
        $this->cartRepository = $cartRepository;
        $this->orderRepository = $orderRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $content = Cart::content();
        $total = Cart::subtotal();

        return view('cart.index', compact('content', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

    }

    /**
     * [add description]
     * @param Request $request [description]
     */
    public function add(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();

            $product = $this->cartRepository->add($data);

            return response()->json($product, 200);
        }

    }

    /**
     * [order description]
     * @param  StoreCartRequest $request [description]
     * @return [type]                    [description]
     */
    public function order(StoreCartRequest $request)
    {
        if (Auth::check() && $request->ajax()) {
            $data = $request->all();
            $order = $this->cartRepository->create($data);

            return response()->json($order, 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "a";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json($this->cartRepository->delete($id), 200);

    }
}
