<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 01:06:05 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractDetail
 *
 * @property int $id
 * @property int $contract_id
 * @property int $book_id
 * @property float $entered_price
 * @property float $rental_price
 * @property string $quality
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Book $book
 * @property \App\Models\Contract $contract
 *
 * @package App\Models
 */
class ContractDetail extends Model
{
    protected $casts = [
        'contract_id' => 'int',
        'book_id' => 'int',
        'entered_price' => 'float',
        'rental_price' => 'float',
    ];

    protected $fillable = [
        'contract_id',
        'book_id',
        'entered_price',
        'rental_price',
        'quality',
    ];

    public function book()
    {
        return $this->belongsTo(\App\Models\Book::class);
    }

    public function contract()
    {
        return $this->belongsTo(\App\Models\Contract::class);
    }
}
