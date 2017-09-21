<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvoicePaid
 *
 * @property int $id
 * @property int $invoice_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Invoice $invoice
 *
 * @package App\Models
 */
class InvoicePaid extends Model
{
    protected $casts = [
        'invoice_id' => 'int',
    ];

    protected $fillable = [
        'invoice_id',
    ];

    public function invoice()
    {
        return $this->belongsTo(\App\Models\Invoice::class);
    }
}
