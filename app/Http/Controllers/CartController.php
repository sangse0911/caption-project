<?php

namespace App\Http\Controllers;

use App\Interfaces\CartInterface;
use App\Interfaces\OrderInterface;
use App\Models\Book;
use Cart;
use Illuminate\Http\Request;

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
        $book = Book::findOrFail($id);

        Cart::add([

            'id' => $book->id,
            'name' => $book->name,
            'qty' => 1,
            'price' => $book->price,

        ]);

        $content = Cart::content();
        dd($content);
    }

    public function add(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();

            $product = $this->cartRepository->add($data);

            return response()->json($product, 200);
        }

    }
    public function order(Request $request)
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
