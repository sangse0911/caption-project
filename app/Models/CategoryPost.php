<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 01:06:05 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryPost
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
class CategoryPost extends Model
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
