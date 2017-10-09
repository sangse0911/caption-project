<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 09 Oct 2017 19:56:52 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostCategory
 *
 * @property int $id
 * @property int $post_id
 * @property int $category_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Category $category
 * @property \App\Models\Post $post
 *
 * @package App\Models
 */
class PostCategory extends Model
{
    protected $casts = [
        'post_id' => 'int',
        'category_id' => 'int',
    ];

    protected $fillable = [
        'post_id',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    public function post()
    {
        return $this->belongsTo(\App\Models\Post::class);
    }
}
