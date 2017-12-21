<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

/**
 * Class Book
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $admin_id
 * @property int $bookself_id
 * @property int $status_id
 * @property string $author
 * @property string $publishing_company
 * @property \Carbon\Carbon $publishing_year
 * @property int $republish
 * @property string $isbn
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Admin $admin
 * @property \App\Models\Bookself $bookself
 * @property \App\Models\Status $status
 * @property \Illuminate\Database\Eloquent\Collection $cate_books
 * @property \Illuminate\Database\Eloquent\Collection $images
 * @property \Illuminate\Database\Eloquent\Collection $invoice_details
 * @property \Illuminate\Database\Eloquent\Collection $order_details
 * @property \Illuminate\Database\Eloquent\Collection $rates
 * @property \Illuminate\Database\Eloquent\Collection $renter_details
 * @property \Illuminate\Database\Eloquent\Collection $reviews
 * @property \Illuminate\Database\Eloquent\Collection $wish_lists
 *
 * @package App\Models
 */
class Book extends Model
{
    use Sluggable;
    use Searchable;
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
        'bookshelf_id' => 'int',
        'price' => 'float',
        'rental_fee' => 'float',
        'republish' => 'int',
    ];

    protected $dates = [
        'year',
    ];

    protected $fillable = [
        'name',
        'introduce',
        'description',
        'admin_id',
        'bookshelf_id',
        'status',
        'price',
        'rental_fee',
        'author',
        'company',
        'year',
        'republish',
        'isbn',
        'slug',
    ];

    public function admin()
    {
        return $this->belongsTo(\App\Models\Admin::class);
    }

    public function bookshelf()
    {
        return $this->belongsTo(\App\Models\Bookshelf::class);
    }

    public function categories()
    {
        return $this->belongsToMany(\App\Models\Category::class, 'book_categories')->withTimestamps();
    }

    public function contracts()
    {
        return $this->belongsToMany(\App\Models\Contract::class, 'contract_details')->withTimestamps();
    }

    public function orders()
    {
        return $this->belongsToMany(\App\Models\Order::class, 'detail_orders')->withTimestamps();
    }

    public function bookCategories()
    {
        return $this->hasMany(\App\Models\BookCategory::class);
    }

    public function images()
    {
        return $this->hasMany(\App\Models\Image::class);
    }

    public function detailOrders()
    {
        return $this->hasMany(\App\Models\DetailOrder::class);
    }

    public function rates()
    {
        return $this->hasMany(\App\Models\Rate::class);
    }

    public function reviews()
    {
        return $this->hasMany(\App\Models\Review::class);
    }

    public function contractDetails()
    {
        return $this->hasMany(\App\Models\ContractDetail::class);
    }

    public function wishLists()
    {
        return $this->hasMany(\App\Models\WishList::class);
    }

}
