<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 01:06:05 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetailRenter
 *
 * @property int $id
 * @property int $book_id
 * @property int $renter_id
 * @property float $deposites
 * @property float $fine
 * @property \Carbon\Carbon $renter_date
 * @property \Carbon\Carbon $due_date
 * @property \Carbon\Carbon $returned_date
 * @property float $total_price
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Book $book
 * @property \App\Models\Renter $renter
 *
 * @package App\Models
 */
class DetailRenter extends Model
{
    protected $casts = [
        'book_id' => 'int',
        'renter_id' => 'int',
        'deposites' => 'float',
        'fine' => 'float',
        'total_price' => 'float',
    ];

    protected $dates = [
        'renter_date',
        'due_date',
        'returned_date',
    ];

    protected $fillable = [
        'book_id',
        'renter_id',
        'deposites',
        'fine',
        'renter_date',
        'due_date',
        'returned_date',
        'total_price',
    ];

    public function book()
    {
        return $this->belongsTo(\App\Models\Book::class);
    }

    public function renter()
    {
        return $this->belongsTo(\App\Models\Renter::class);
    }
}
