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
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $comment_posts
 * @property \Illuminate\Database\Eloquent\Collection $customers
 * @property \Illuminate\Database\Eloquent\Collection $notification_posts
 * @property \Illuminate\Database\Eloquent\Collection $post_rates
 * @property \Illuminate\Database\Eloquent\Collection $post_wish_lists
 * @property \Illuminate\Database\Eloquent\Collection $posts
 * @property \Illuminate\Database\Eloquent\Collection $rates
 * @property \Illuminate\Database\Eloquent\Collection $reviews
 * @property \Illuminate\Database\Eloquent\Collection $suppliers
 * @property \Illuminate\Database\Eloquent\Collection $wish_lists
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * [$casts description]
     * @var [type]
     */
    protected $casts = [
        'account_balance' => 'float',
    ];

    /**
     * [$hidden description]
     * @var [type]
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        'name',
        'facebook_id',
        'email',
        'password',
        'account_status',
        'account_balance',
        'remember_token',
    ];

    public function commentPosts()
    {
        return $this->hasMany(\App\Models\CommentPost::class);
    }

    public function customers()
    {
        return $this->hasMany(\App\Models\Customer::class);
    }

    public function notificationPosts()
    {
        return $this->hasMany(\App\Models\NotificationPost::class);
    }

    public function postRates()
    {
        return $this->hasMany(\App\Models\PostRate::class);
    }

    public function postWishLists()
    {
        return $this->hasMany(\App\Models\PostWishList::class);
    }

    public function posts()
    {
        return $this->hasMany(\App\Models\Post::class);
    }

    public function rates()
    {
        return $this->hasMany(\App\Models\Rate::class);
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
