<?php

namespace App\Models\User;

use App\Models\BaseModel;

/**
 * @mixin IdeHelperClientUser
 */
class ClientUser extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_company_id',
        'code',
        'name',
        'role_indicator',
        'position',
        'email',
        'phone',
        'login_id',
        'password',
        'lock_flag',
        'failure_count',
        'last_locked_at',
        'access_authority',
        'display_order',
        'statistic_classification',
        'use_classification',
        'note',
    ];
}
