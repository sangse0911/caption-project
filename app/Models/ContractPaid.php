<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 01:06:05 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractPaid
 *
 * @property int $id
 * @property int $contract_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Contract $contract
 *
 * @package App\Models
 */
class ContractPaid extends Model
{
    protected $casts = [
        'contract_id' => 'int',
    ];

    protected $fillable = [
        'contract_id',
    ];

    public function contract()
    {
        return $this->belongsTo(\App\Models\Contract::class);
    }
}
