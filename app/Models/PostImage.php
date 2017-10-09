<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 09 Oct 2017 19:56:52 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostImage
 *
 * @property int $id
 * @property int $post_id
 * @property string $path
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Post $post
 *
 * @package App\Models
 */
class PostImage extends Model
{
    protected $casts = [
        'post_id' => 'int',
    ];

    protected $fillable = [
        'post_id',
        'path',
    ];

    public function post()
    {
        return $this->belongsTo(\App\Models\Post::class);
    }
}
