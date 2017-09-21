<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Foundation\Auth\Admin as Authenticatable;

/**
 * Class Admin
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $books
 * @property \Illuminate\Database\Eloquent\Collection $bookselves
 * @property \Illuminate\Database\Eloquent\Collection $contacts
 * @property \Illuminate\Database\Eloquent\Collection $events
 * @property \Illuminate\Database\Eloquent\Collection $vouchers
 *
 * @package App\Models
 */
class Admin extends Authenticatable
{
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $fillable = [
        'name',
        'password',
        'remember_token',
    ];

    public function books()
    {
        return $this->hasMany(\App\Models\Book::class);
    }

    public function bookselves()
    {
        return $this->hasMany(\App\Models\Bookself::class);
    }

    public function contacts()
    {
        return $this->hasMany(\App\Models\Contact::class);
    }

    public function events()
    {
        return $this->hasMany(\App\Models\Event::class);
    }

    public function vouchers()
    {
        return $this->hasMany(\App\Models\Voucher::class);
    }
}
