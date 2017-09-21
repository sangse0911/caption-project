<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bookself
 *
 * @property int $id
 * @property int $admin_id
 * @property int $quantity
 * @property string $location
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Admin $admin
 * @property \Illuminate\Database\Eloquent\Collection $books
 *
 * @package App\Models
 */
class Bookself extends Model
{
    protected $table = 'bookselfs';

    protected $casts = [
        'admin_id' => 'int',
        'quantity' => 'int',
    ];

    protected $fillable = [
        'admin_id',
        'quantity',
        'location',
    ];

    public function admin()
    {
        return $this->belongsTo(\App\Models\Admin::class);
    }

    public function books()
    {
        return $this->hasMany(\App\Models\Book::class);
    }
}
