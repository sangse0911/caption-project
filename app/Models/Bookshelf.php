<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Bookself
 *
 * @property int $id
 * @property int $admin_id
 * @property int $quantity
 * @property string $location
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Admin $admin
 * @property \Illuminate\Database\Eloquent\Collection $books
 *
 * @package App\Models
 */
class Bookshelf extends Model
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
                'source' => 'status',
            ],
        ];
    }

    protected $casts = [
        'admin_id' => 'int',
    ];

    protected $fillable = [
        'admin_id',
        'status',
        'location',
        'slug',
    ];

    public function admin()
    {
        return $this->belongsTo(\App\Models\Admin::class);
    }

    public function books()
    {
        return $this->hasMany(\App\Models\Book::class);
    }
}
