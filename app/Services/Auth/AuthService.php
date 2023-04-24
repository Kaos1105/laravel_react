<?php

namespace App\Services\Auth;

use App\Models\SystemUser;
use App\Repositories\SystemUser\SystemUserRepository;

class AuthService implements IAuthService
{
    private SystemUserRepository $systemUserRepository;

    public function __construct(SystemUserRepository $systemUserRepository)
    {
        $this->systemUserRepository = $systemUserRepository;
    }

    public function logIn(SystemUser $systemUser){

    }
}
