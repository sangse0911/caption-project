<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 *
 * @property int $id
 * @property int $admin_id
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Admin $admin
 *
 * @package App\Models
 */
class Contact extends Model
{
    protected $casts = [
        'admin_id' => 'int',
    ];

    protected $fillable = [
        'admin_id',
        'phone',
        'email',
        'address',
    ];

    public function admin()
    {
        return $this->belongsTo(\App\Models\Admin::class);
    }
}
