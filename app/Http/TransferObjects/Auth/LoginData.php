<?php

namespace App\Http\TransferObjects\Auth;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class LoginData extends Data
{
    public function __construct(
        public string $password,
        #[MapInputName('login_id')]
        public string $loginId,
    ) {
    }
}
