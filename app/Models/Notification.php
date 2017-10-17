<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 01:06:05 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notification
 *
 * @property int $id
 * @property int $user_id
 * @property string $notification
 * @property int $notificationable_id
 * @property string $notification_type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Notification extends Model
{
    protected $casts = [
        'user_id' => 'int',
        'notificationable_id' => 'int',
    ];

    protected $fillable = [
        'user_id',
        'notification',
        'notificationable_id',
        'notification_type',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
