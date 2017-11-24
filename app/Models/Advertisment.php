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
 * @property int $post_id
 * @property int $money
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Post $post
 *
 * @package App\Models
 */
class Advertisment extends Model
{
    protected $casts = [
        'post_id' => 'int',
        'money' => 'int',
    ];

    protected $fillable = [
        'post_id',
        'money',
    ];

    public function post()
    {
        return $this->belongsTo(\App\Models\Post::class);
    }
}
