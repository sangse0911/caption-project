<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

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
        'bookself_id' => 'int',
        'status_id' => 'int',
        'republish' => 'int',
    ];

    protected $dates = [
        'publishing_year',
    ];

    protected $fillable = [
        'name',
        'introduce',
        'description',
        'admin_id',
        'bookself_id',
        'status_id',
        'author',
        'publishing_company',
        'publishing_year',
        'republish',
        'isbn',
        'slug',
    ];

    public function admin()
    {
        return $this->belongsTo(\App\Models\Admin::class);
    }

    public function bookself()
    {
        return $this->belongsTo(\App\Models\Bookself::class);
    }

    public function status()
    {
        return $this->belongsTo(\App\Models\Status::class);
    }

    public function cateBooks()
    {
        return $this->hasMany(\App\Models\CateBook::class);
    }

    public function images()
    {
        return $this->hasMany(\App\Models\Image::class);
    }

    public function invoiceDetails()
    {
        return $this->hasMany(\App\Models\InvoiceDetail::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(\App\Models\OrderDetail::class);
    }

    public function rates()
    {
        return $this->hasMany(\App\Models\Rate::class);
    }

    public function renterDetails()
    {
        return $this->hasMany(\App\Models\RenterDetail::class);
    }

    public function reviews()
    {
        return $this->hasMany(\App\Models\Review::class);
    }

    public function wishLists()
    {
        return $this->hasMany(\App\Models\WishList::class);
    }
}
