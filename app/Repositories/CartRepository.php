<?php

namespace App\Repositories;

use App\Interfaces\BookInterface;
use App\Interfaces\CartInterface;
use App\Interfaces\OrderInterface;
use App\Models\Book;
use Auth;
use Cart;
use Illuminate\Http\Response;

class CartRepository implements CartInterface
{

    protected $orderRepository;
    protected $bookRepository;

    /**
     * [__construct description]
     * @param OrderInterface       $orderRepository       [description]
     * @param BookInterface        $bookRepository        [description]
     */
    public function __construct(
        OrderInterface $orderRepository,
        BookInterface $bookRepository
    ) {
        $this->orderRepository = $orderRepository;
        $this->bookRepository = $bookRepository;
    }

    /**
     * [all description]
     * @return [type] [description]
     */
    public function all()
    {
        $content = Cart::content();
        $total = Cart::total();
        // dd($content);
        return [
            'content' => $content,
            'total' => $total,
        ];
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {

    }

    /**
     * [add description]
     * @param [type] $data [description]
     */
    public function add($data)
    {
        $book = Book::findOrFail($data['id']);

        $content = Cart::content();
        foreach ($content as $item) {
            if ($item->id == $data['id']) {
                // http_response_code(400);

                return response($data['id'], 422);
            } else {

            }
        }

        Cart::add(array(

            'id' => $book->id,
            'name' => $book->name,
            'qty' => 1,
            'price' => $book->price,
            'options' => [
                'image' => $book->images[0]->path,
            ],

        ));

        return $content;
    }

    /**
     * [create description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data)
    {
        $id = Auth::user()->id;
        $content = Cart::content();

        $total = Cart::subtotal();

        $items = array(

            'user_id' => $id,
            'method' => $data['method'],
            'address' => $data['address'],
            'phone' => $data['phone'],
        );
        $order = $this->orderRepository->create($items);

        foreach ($content as $item) {

            $itemDetails = array(
                'order_id' => $order->id,
                'book_id' => $item->id,
                'quantity' => $item->qty,
                'price' => $item->price,
            );
            //
            $book = $this->bookRepository->findById($item->id);

            //change book status to
            $book->status = '2';
            $book->save();
            //create orderDetail
            $orderDetail = $order->books()->attach($book->id,
                [
                    'book_id' => $book->id,
                    'order_id' => $order->id,
                    'quantity' => 1,
                    'fee' => 0,
                    'discount' => 0,
                    'total_price' => $book->price,
                ]);
        }

        Cart::destroy();

        return $order;
    }

    /**
     * [delete description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($id)
    {
        return Cart::remove($id);
    }
}
