<?php

namespace App\Models\Company;

use App\Models\BaseModel;
use App\Models\User\ClientUser;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperClientCompany
 */
class ClientCompany extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'name_kana',
        'operation_classification',
        'date_start',
        'date_end',
        'bill_to',
        'in_charge_name',
        'in_charge_tel',
        'in_charge_email',
        'next_billing_date',
        'next_billing_amount',
        'contract_history',
        'client_classification',
        'payment_classification',
        'note',
        'use_classification',
    ];

    protected $casts = [
        'date_start' => 'date',
        'date_end' => 'date',
        'next_billing_date' => 'date',
    ];

    public function client_users(): HasMany
    {
        return $this->hasMany(ClientUser::class);
    }
}
