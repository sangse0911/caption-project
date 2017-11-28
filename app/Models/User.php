<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $facebook_id
 * @property string $email
 * @property string $password
 * @property string $account_status
 * @property float $account_balance
 * @property string $tags
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $notifications
 * @property \Illuminate\Database\Eloquent\Collection $orders
 * @property \Illuminate\Database\Eloquent\Collection $posts
 * @property \Illuminate\Database\Eloquent\Collection $rates
 * @property \Illuminate\Database\Eloquent\Collection $renters
 * @property \Illuminate\Database\Eloquent\Collection $reviews
 * @property \Illuminate\Database\Eloquent\Collection $suppliers
 * @property \Illuminate\Database\Eloquent\Collection $wish_lists
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use Notifiable;

    protected $casts = [
        'account_balance' => 'float',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $fillable = [
        'name',
        'facebook_id',
        'email',
        'password',
        'account_status',
        'account_balance',
        'tags',
        'remember_token',
    ];

    public function notifications()
    {
        return $this->hasMany(\App\Models\Notification::class);
    }

    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }

    public function posts()
    {
        return $this->hasMany(\App\Models\Post::class);
    }

    public function rates()
    {
        return $this->hasMany(\App\Models\Rate::class);
    }

    public function renters()
    {
        return $this->hasMany(\App\Models\Renter::class);
    }

    public function reviews()
    {
        return $this->hasMany(\App\Models\Review::class);
    }

    public function suppliers()
    {
        return $this->hasMany(\App\Models\Supplier::class);
    }

    public function wishLists()
    {
        return $this->hasMany(\App\Models\WishList::class);
    }
}
