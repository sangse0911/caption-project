<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 09 Oct 2017 19:56:52 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostAdvertisment
 *
 * @property int $id
 * @property int $postInvoice_id
 * @property string $number
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\PostInvoice $post_invoice
 *
 * @package App\Models
 */
class PostAdvertisment extends Model
{
    protected $casts = [
        'postInvoice_id' => 'int',
    ];

    protected $fillable = [
        'postInvoice_id',
        'number',
    ];

    public function postInvoice()
    {
        return $this->belongsTo(\App\Models\PostInvoice::class, 'postInvoice_id');
    }
}
