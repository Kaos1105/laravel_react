<?php

namespace App\Enums\ClientUser;
use BenSampo\Enum\Enum;

final class RoleIndicatorEnum extends Enum
{
    const PROMOTION_OFFICER = 1;
    const PROMOTION_COMMITTEE = 2;
    const DIRECTOR = 3;
    const DEPARTMENT_MANAGER = 4;
    const WORKPLACE_MANAGER = 5;
    const CIRCLE_PROMOTER = 6;
    const MEMBER = 7;
    const QC_ORGANIZATION_LEADER = 8;
    const QC_ORGANIZATION_MEMBER = 9;
    const JUDGE = 10;
}
