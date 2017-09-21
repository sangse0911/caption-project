<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Purchase
 *
 * @property int $id
 * @property int $renter_id
 * @property int $order_id
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Order $order
 * @property \App\Models\Renter $renter
 *
 * @package App\Models
 */
class Purchase extends Model
{
    protected $casts = [
        'renter_id' => 'int',
        'order_id' => 'int',
    ];

    protected $fillable = [
        'renter_id',
        'order_id',
        'status',
    ];

    public function order()
    {
        return $this->belongsTo(\App\Models\Order::class);
    }

    public function renter()
    {
        return $this->belongsTo(\App\Models\Renter::class);
    }
}
