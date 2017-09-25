<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 *
 * @property int $id
 * @property int $admin_id
 * @property string $title
 * @property string $image_path
 * @property string $description
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Admin $admin
 *
 * @package App\Models
 */
class Event extends Model
{

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    protected $casts = [
        'admin_id' => 'int',
    ];

    protected $fillable = [
        'admin_id',
        'title',
        'image_path',
        'description',
        'status',
        'slug',
    ];

    public function admin()
    {
        return $this->belongsTo(\App\Models\Admin::class);
    }
}
