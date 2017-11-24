<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WishList
 *
 * @property int $id
 * @property int $user_id
 * @property int $book_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Book $book
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Supplier extends Model
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

    public function contracts()
    {
        return $this->hasMany(\App\Models\Contract::class);
    }

    public function admins()
    {
        return $this->belongsToMany(\App\Models\Admin::class, 'admin_id', 'supplier_id', 'id')->withTimestamps();
    }

    public function contractDetails()
    {
        return $this->hasManyThrough(\App\Models\ContractDetail::class, \App\Models\Contract::class);
    }
}
