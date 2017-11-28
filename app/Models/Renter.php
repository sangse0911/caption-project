<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Renter
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
 * @property \Illuminate\Database\Eloquent\Collection $detail_renters
 *
 * @package App\Models
 */
class Renter extends Model
{
    protected $casts = [
        'user_id' => 'int',
    ];

    protected $fillable = [
        'user_id',
        'payment_method',
        'status',
        'shipping_address',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function detailRenters()
    {
        return $this->hasMany(\App\Models\DetailRenter::class);
    }
}
