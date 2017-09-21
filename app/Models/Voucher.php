<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Voucher
 *
 * @property int $id
 * @property int $admin_id
 * @property string $number
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Admin $admin
 *
 * @package App\Models
 */
class Voucher extends Model
{
    protected $casts = [
        'admin_id' => 'int',
    ];

    protected $fillable = [
        'admin_id',
        'number',
    ];

    public function admin()
    {
        return $this->belongsTo(\App\Models\Admin::class);
    }
}
