<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 17 Oct 2017 20:31:23 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $admins
 *
 * @package App\Models
 */
class Role extends Model
{
    protected $fillable = [
        'name',
    ];

    public function admins()
    {
        return $this->hasMany(\App\Models\Admin::class);
    }
}
