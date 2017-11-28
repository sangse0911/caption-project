<?php

namespace App\Repositories;

use App\Interfaces\BookInterface;
use App\Interfaces\CartInterface;
use App\Interfaces\OrderDetailInterface;
use App\Interfaces\OrderInterface;
use App\Models\Book;
use Auth;
use Cart;

class CartRepository implements CartInterface
{

    protected $orderRepository;
    protected $bookRepository;
    protected $orderDetailRepository;

    /**
     * [__construct description]
     * @param OrderInterface       $orderRepository       [description]
     * @param BookInterface        $bookRepository        [description]
     * @param OrderDetailInterface $orderDetailRepository [description]
     */
    public function __construct(
        OrderInterface $orderRepository,
        BookInterface $bookRepository,
        OrderDetailInterface $orderDetailRepository
    ) {
        $this->orderRepository = $orderRepository;
        $this->bookRepository = $bookRepository;
        $this->orderDetailRepository = $orderDetailRepository;
    }

    /**
     * [all description]
     * @return [type] [description]
     */
    public function all()
    {
        $content = Cart::content();
        dd($content);
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

        Cart::add(array(

            'id' => $book->id,
            'name' => $book->name,
            'qty' => 1,
            'price' => $book->price,
            'options' => [
                'image' => $book->images[0]->path,
            ],

        ));

        $content = Cart::content();

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

        $content1 = Cart::subcontent();
        $total = Cart::subtotal();

        $items = array(

            'user_id' => $id,
            'payment_method' => $data['method'],
            'status' => $data['status'],
            'shipping_address' => $data['address'],
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
            $book = $this->bookRepository->find($item->id);
            //change book status to
            $book->status = 2;
            $book->save();

            $orderDetail = $this->orderDetailRepository->create();

        }
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
