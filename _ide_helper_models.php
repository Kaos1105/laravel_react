<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\BaseModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel query()
 * @mixin \Eloquent
 */
	class IdeHelperBaseModel {}
}

namespace App\Models\Company{
/**
 * App\Models\Company\ClientCompany
 *
 * @property int $id
 * @property string $name
 * @property string|null $name_kana
 * @property int $operation_classification
 * @property \Illuminate\Support\Carbon $date_start
 * @property \Illuminate\Support\Carbon $date_end
 * @property string|null $bill_to
 * @property string $in_charge_name
 * @property string $in_charge_tel
 * @property string $in_charge_email
 * @property \Illuminate\Support\Carbon|null $next_billing_date
 * @property float|null $next_billing_amount
 * @property string|null $contract_history
 * @property int $client_classification
 * @property int $payment_classification
 * @property string|null $note
 * @property int $use_classification
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User\ClientUser> $client_users
 * @property-read int|null $client_users_count
 * @method static \Database\Factories\Company\ClientCompanyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereBillTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereClientClassification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereContractHistory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereInChargeEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereInChargeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereInChargeTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereNameKana($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereNextBillingAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereNextBillingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereOperationClassification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany wherePaymentClassification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCompany whereUseClassification($value)
 * @mixin \Eloquent
 */
	class IdeHelperClientCompany {}
}

namespace App\Models{
/**
 * App\Models\SystemUser
 *
 * @property int $id
 * @property string $name
 * @property string $login_id
 * @property string $password
 * @property int $lock_flag
 * @property int $failure_count
 * @property string|null $last_locked_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SystemUserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereFailureCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereLastLockedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereLockFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereLoginId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereUpdatedBy($value)
 * @mixin \Eloquent
 */
	class IdeHelperSystemUser {}
}

namespace App\Models\User{
/**
 * App\Models\User\ClientUser
 *
 * @property int $id
 * @property int $client_company_id
 * @property string $code
 * @property string $name
 * @property int $role_indicator
 * @property string|null $position
 * @property string|null $email
 * @property string|null $phone
 * @property string $login_id
 * @property string $password
 * @property int $lock_flag
 * @property int $failure_count
 * @property string|null $last_locked_at
 * @property int $access_authority
 * @property int $display_order
 * @property int $statistic_classification
 * @property int $use_classification
 * @property string|null $note
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $last_access_at
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereAccessAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereClientCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereDisplayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereFailureCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereLastAccessAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereLastLockedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereLockFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereLoginId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereRoleIndicator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereStatisticClassification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientUser whereUseClassification($value)
 * @mixin \Eloquent
 */
	class IdeHelperClientUser {}
}

