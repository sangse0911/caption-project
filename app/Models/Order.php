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
 * @property int $user_id
 * @property string $payment_method
 * @property string $status
 * @property string $shipping_address
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $detail_orders
 * @property \Illuminate\Database\Eloquent\Collection $invoices
 *
 * @package App\Models
 */
class Order extends Model
{
    protected $casts = [
        'user_id' => 'int',
    ];

    protected $fillable = [
        'user_id',
        'method',
        'status',
        'address',
        'phone',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function detailOrders()
    {
        return $this->hasMany(\App\Models\DetailOrder::class);
    }

    public function invoices()
    {
        return $this->hasMany(\App\Models\Invoice::class);
    }

    public function books()
    {
        return $this->belongsToMany(\App\Models\Book::class, 'detail_orders')->withTimestamps();
    }
}
