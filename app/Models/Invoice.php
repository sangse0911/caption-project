<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Invoice
 *
 * @property int $id
 * @property int $order_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Order $order
 *
 * @package App\Models
 */
class Invoice extends Model
{
    protected $casts = [
        'order_id' => 'int',
    ];

    protected $fillable = [
        'order_id',
    ];

    public function order()
    {
        return $this->belongsTo(\App\Models\Order::class);
    }
}
