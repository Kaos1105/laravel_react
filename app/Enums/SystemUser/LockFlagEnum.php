<?php

namespace App\Enums\SystemUser;
use BenSampo\Enum\Enum;

final class LockFlagEnum extends Enum
{
    const UNLOCKED = 0;
    const LOCKED = 1;
}
