<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 *
 * @property int $id
 * @property string $path
 * @property int $book_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Book $book
 *
 * @package App\Models
 */
class Image extends Model
{
    protected $casts = [
        'book_id' => 'int',
    ];

    protected $fillable = [
        'path',
        'book_id',
    ];

    public function book()
    {
        return $this->belongsTo(\App\Models\Book::class);
    }

}
