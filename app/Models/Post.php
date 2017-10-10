<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 09 Oct 2017 19:44:33 +0700.
 */

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @property int $id
 * @property string $name
 * @property string $introduce
 * @property string $description
 * @property int $status
 * @property int $user_id
 * @property string $author
 * @property string $publishing_company
 * @property \Carbon\Carbon $publishing_year
 * @property int $republish
 * @property string $isbn
 * @property string $slug
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $post_categories
 * @property \Illuminate\Database\Eloquent\Collection $post_comments
 * @property \Illuminate\Database\Eloquent\Collection $post_images
 * @property \Illuminate\Database\Eloquent\Collection $post_invoices
 * @property \Illuminate\Database\Eloquent\Collection $post_notifications
 * @property \Illuminate\Database\Eloquent\Collection $post_rates
 * @property \Illuminate\Database\Eloquent\Collection $post_wish_lists
 *
 * @package App\Models
 */
class Post extends Eloquent
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

    /**
     * [$casts description]
     * @var [type]
     */
    protected $casts = [
        'status' => 'int',
        'republish' => 'int',
        'user_id' => 'int',
    ];

    /**
     * [$dates description]
     * @var [type]
     */
    protected $dates = [
        'publishing_year',
    ];

    /**
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        'user_id',
        'name',
        'introduce',
        'description',
        'status',
        'author',
        'publishing_company',
        'publishing_year',
        'republish',
        'isbn',
        'slug',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
    public function postCategories()
    {
        return $this->hasMany(\App\Models\PostCategory::class);
    }

    public function postComments()
    {
        return $this->hasMany(\App\Models\PostComment::class);
    }

    public function postImages()
    {
        return $this->hasMany(\App\Models\PostImage::class);
    }

    public function postInvoices()
    {
        return $this->hasMany(\App\Models\PostInvoice::class);
    }

    public function postNotifications()
    {
        return $this->hasMany(\App\Models\PostNotification::class);
    }

    public function postRates()
    {
        return $this->hasMany(\App\Models\PostRate::class);
    }

    public function postWishLists()
    {
        return $this->hasMany(\App\Models\PostWishList::class);
    }
}
