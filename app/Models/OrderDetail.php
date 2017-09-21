<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderDetail
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
class OrderDetail extends Model
{
    protected $casts = [
        'book_id' => 'int',
        'order_id' => 'int',
        'discount' => 'int',
        'fee' => 'int',
        'quantity' => 'int',
        'total_price' => 'float',
    ];

    protected $fillable = [
        'book_id',
        'order_id',
        'discount',
        'fee',
        'quantity',
        'total_price',
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
