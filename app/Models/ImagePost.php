<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 01:06:05 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImagePost
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
class ImagePost extends Model
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
