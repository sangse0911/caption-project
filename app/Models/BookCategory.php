<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CateBook
 *
 * @property int $id
 * @property int $category_id
 * @property int $book_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Book $book
 * @property \App\Models\Category $category
 *
 * @package App\Models
 */
class BookCategory extends Model
{
    protected $casts = [
        'category_id' => 'int',
        'book_id' => 'int',
    ];

    protected $fillable = [
        'category_id',
        'book_id',
    ];

    public function book()
    {
        return $this->belongsTo(\App\Models\Book::class);
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }
}
