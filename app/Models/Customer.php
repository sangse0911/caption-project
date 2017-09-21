<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 *
 * @property int $id
 * @property int $user_id
 * @property string $phone
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $orders
 * @property \Illuminate\Database\Eloquent\Collection $renters
 *
 * @package App\Models
 */
class Customer extends Model
{
    protected $casts = [
        'user_id' => 'int',
    ];

    protected $fillable = [
        'user_id',
        'phone',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }

    public function renters()
    {
        return $this->hasMany(\App\Models\Renter::class);
    }
}
