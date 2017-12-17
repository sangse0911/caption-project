<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
    use Notifiable;

    protected $guard = 'admin';

    protected $casts = [
        'role_id' => 'int',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $fillable = [
        'name',
        'password',
        'email',
        'role_id',
        'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class);
    }

    public function books()
    {
        return $this->hasMany(\App\Models\Book::class);
    }

    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class, 'contracts')->withTimeStamps();
    }

    public function bookselves()
    {
        return $this->hasMany(\App\Models\Bookshelf::class);
    }

    public function contacts()
    {
        return $this->hasMany(\App\Models\Contact::class);
    }

    public function contracts()
    {
        return $this->hasMany(\App\Models\Contract::class);
    }

    public function events()
    {
        return $this->hasMany(\App\Models\Event::class);
    }

    public function vouchers()
    {
        return $this->hasMany(\App\Models\Voucher::class);
    }

    public function categories()
    {
        return $this->hasMany(\App\Models\Category::class);
    }

}
