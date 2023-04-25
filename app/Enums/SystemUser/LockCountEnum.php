<?php

namespace App\Enums\SystemUser;
use BenSampo\Enum\Enum;

final class LockCountEnum extends Enum
{
    const MAX_ATTEMPT_COUNT = 5;
    const DECAY_RATE_MINUTE = 15;
}
