<?php

namespace App\Enums\ClientCompany;
use BenSampo\Enum\Enum;

final class PaymentClassificationEnum extends Enum
{
    const UNDECIDED = 1;
    const NORMAL = 2;
    const DISCOUNT = 3;
    const OTHER = 4;
}
