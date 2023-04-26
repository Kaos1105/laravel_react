<?php

namespace App\Enums\Common;
use BenSampo\Enum\Enum;

final class DateTimeEnum extends Enum
{
    const DATE_TIME_FORMAT = 'Y/m/d H:i:s';
    const DATE_TIME_FORMAT_WO_SECOND = 'Y/m/d H:i';
    const DATE_TIME_FORMAT_WO_THIRD = 'm/d H:i';
    const DATE_TIME_FORMAT_V2 = 'Y-m-d H:i:s';
    const DATE_FORMAT = 'Y/m/d';
    const DATE_FORMAT_V2 = 'Y-m-d';
    const DATE_FORMAT_V3 = 'Ymd';
    const TIME_FORMAT = 'Hi';
    const YEAR_MONTH_DB_FORMAT = '%Y-%m';
    const YEAR_MONTH_PHP_FORMAT = 'Y-m';
}
