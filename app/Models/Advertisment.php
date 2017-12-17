<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 23 Nov 2017 23:25:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Advertisment
 *
 * @property int $id
 * @property int $book_id
 * @property int $money
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Book $book
 *
 * @package App\Models
 */
class Advertisment extends Model
{
    protected $casts = [
        'book_id' => 'int',
        'money' => 'int',
    ];

    protected $fillable = [
        'book_id',
        'money',
    ];

    public function book()
    {
        return $this->belongsTo(\App\Models\Book::class);
    }
}
