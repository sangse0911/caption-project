<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $cate_books
 *
 * @package App\Models
 */
class Category extends Model
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
                'source' => 'name',
            ],
        ];
    }

    protected $casts = [
        'admin_id' => 'int',
    ];

    protected $fillable = [
        'admin_id',
        'name',
        'path',
        'slug',
    ];

    public function admin()
    {
        return $this->belongsTo(\App\Models\Admin::class);
    }

    public function bookCategories()
    {
        return $this->hasMany(\App\Models\BookCategory::class);
    }

    public function postCategories()
    {
        return $this->hasMany(\App\Models\PostCategory::class);
    }

    public function books()
    {
        return $this->belongsToMany(\App\Models\Book::class, 'book_categories')->withTimestamps();
    }

    public function posts()
    {
        return $this->belongsToMany(\App\Models\Post::class, 'category_posts')->withTimestamps();
    }
}
