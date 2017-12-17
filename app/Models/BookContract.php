<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 01:06:05 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BookContract
 *
 * @property int $id
 * @property int $book_id
 * @property int $contract_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Book $book
 * @property \App\Models\Contract $contract
 *
 * @package App\Models
 */
class BookContract extends Model
{
    protected $casts = [
        'book_id' => 'int',
        'contract_id' => 'int',
    ];

    protected $fillable = [
        'book_id',
        'contract_id',
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
