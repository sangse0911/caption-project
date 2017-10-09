<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 09 Oct 2017 19:56:52 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostNotification
 *
 * @property int $id
 * @property int $user_id
 * @property int $post_id
 * @property string $notification
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Post $post
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class PostNotification extends Model
{
    protected $casts = [
        'user_id' => 'int',
        'post_id' => 'int',
    ];

    protected $fillable = [
        'user_id',
        'post_id',
        'notification',
    ];

    public function post()
    {
        return $this->belongsTo(\App\Models\Post::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
