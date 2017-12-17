<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 01:06:05 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetailOrder
 *
 * @property int $id
 * @property int $book_id
 * @property int $order_id
 * @property int $discount
 * @property int $fee
 * @property int $quantity
 * @property float $total_price
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Book $book
 * @property \App\Models\Order $order
 *
 * @package App\Models
 */
class DetailOrder extends Model
{
    protected $casts = [
        'book_id' => 'int',
        'order_id' => 'int',
        'quantity' => 'int',
        'total_price' => 'float',
        'fee' => 'int',
        'discount' => 'int',
    ];

    protected $fillable = [
        'book_id',
        'order_id',
        'quantity',
        'total_price',
        'fee',
        'discount',
    ];

    public function book()
    {
        return $this->belongsTo(\App\Models\Book::class);
    }

    public function order()
    {
        return $this->belongsTo(\App\Models\Order::class);
    }
}
