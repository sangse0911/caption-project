<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Invoice
 *
 * @property int $id
 * @property int $supplier_id
 * @property string $payment_method
 * @property string $bank_account
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Supplier $supplier
 *
 * @package App\Models
 */
class Invoice extends Eloquent
{
    protected $casts = [
        'supplier_id' => 'int',
    ];

    protected $fillable = [
        'supplier_id',
        'payment_method',
        'bank_account',
        'status',
    ];

    public function supplier()
    {
        return $this->belongsTo(\App\Models\Supplier::class);
    }
}
