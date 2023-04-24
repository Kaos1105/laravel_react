<?php

namespace App\Services\Auth;

use App\Models\SystemUser;

interface IAuthService
{
    public function logIn(SystemUser $systemUser);
}
