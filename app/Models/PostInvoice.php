<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 09 Oct 2017 19:56:52 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostInvoice
 *
 * @property int $id
 * @property int $post_id
 * @property string $information
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Post $post
 * @property \Illuminate\Database\Eloquent\Collection $post_advertisments
 *
 * @package App\Models
 */
class PostInvoice extends Model
{
    protected $casts = [
        'post_id' => 'int',
    ];

    protected $fillable = [
        'post_id',
        'information',
    ];

    public function post()
    {
        return $this->belongsTo(\App\Models\Post::class);
    }

    public function postAdvertisments()
    {
        return $this->hasMany(\App\Models\PostAdvertisment::class, 'postInvoice_id');
    }
}
