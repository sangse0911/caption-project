<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Sep 2017 01:54:30 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $cate_books
 *
 * @package App\Models
 */
class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function cateBooks()
    {
        return $this->hasMany(\App\Models\CateBook::class);
    }
}
