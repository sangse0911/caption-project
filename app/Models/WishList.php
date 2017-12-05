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
 * @property int $wishListable_id
 * @property string $wishListable_type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class WishList extends Model
{
    protected $casts = [
        'user_id' => 'int',
        'book_id' => 'int',
    ];

    protected $fillable = [
        'user_id',
        'book_id',
    ];

    public function book()
    {
        return $this->belongsTo(\App\Models\Book::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
