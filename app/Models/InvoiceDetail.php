<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvoiceDetail
 *
 * @property int $id
 * @property int $invoice_id
 * @property int $book_id
 * @property float $entered_price
 * @property float $sell_price
 * @property float $rental_price
 * @property int $quanlity
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Book $book
 * @property \App\Models\Invoice $invoice
 *
 * @package App\Models
 */
class InvoiceDetail extends Model
{
    protected $casts = [
        'invoice_id' => 'int',
        'book_id' => 'int',
        'entered_price' => 'float',
        'sell_price' => 'float',
        'rental_price' => 'float',
        'quanlity' => 'int',
    ];

    protected $fillable = [
        'invoice_id',
        'book_id',
        'entered_price',
        'sell_price',
        'rental_price',
        'quanlity',
    ];

    public function book()
    {
        return $this->belongsTo(\App\Models\Book::class);
    }

    public function invoice()
    {
        return $this->belongsTo(\App\Models\Invoice::class);
    }
}
