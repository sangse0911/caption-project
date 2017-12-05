<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 01:06:05 +0700.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contract
 *
 * @property int $id
 * @property int $supplier_id
 * @property int $admin_id
 * @property string $payment_method
 * @property string $bank_account
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Admin $admin
 * @property \App\Models\Supplier $supplier
 * @property \Illuminate\Database\Eloquent\Collection $books
 * @property \Illuminate\Database\Eloquent\Collection $contract_details
 * @property \Illuminate\Database\Eloquent\Collection $contract_paids
 *
 * @package App\Models
 */
class Contract extends Model
{
    protected $casts = [
        'user_id' => 'int',
        'admin_id' => 'int',
    ];

    protected $fillable = [
        'user_id',
        'admin_id',
        'method',
        'account',
        'kind',
        'status',
    ];

    public function admin()
    {
        return $this->belongsTo(\App\Models\Admin::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function books()
    {
        return $this->belongsToMany(\App\Models\Book::class, 'contract_details')->withTimestamps();
    }

    public function contractDetails()
    {
        return $this->hasMany(\App\Models\ContractDetail::class);
    }

    public function contractPaids()
    {
        return $this->hasMany(\App\Models\ContractPaid::class);
    }
}
