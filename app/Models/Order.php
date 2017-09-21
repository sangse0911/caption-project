<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property int $id
 * @property int $customer_id
 * @property string $payment_method
 * @property string $status
 * @property int $ship_id
 * @property string $shipping_address
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Customer $customer
 * @property \Illuminate\Database\Eloquent\Collection $order_details
 * @property \Illuminate\Database\Eloquent\Collection $purchases
 *
 * @package App\Models
 */
class Order extends Model
{
    protected $casts = [
        'customer_id' => 'int',
        'ship_id' => 'int',
    ];

    protected $fillable = [
        'customer_id',
        'payment_method',
        'status',
        'ship_id',
        'shipping_address',
    ];

    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(\App\Models\OrderDetail::class);
    }

    public function purchases()
    {
        return $this->hasMany(\App\Models\Purchase::class);
    }
}
