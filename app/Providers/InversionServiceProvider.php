<?php

namespace App\Providers;

use App\Services\Auth\AuthService;
use App\Services\Auth\IAuthService;
use App\Services\Company\ClientCompanyService;
use App\Services\Company\IClientCompanyService;
use Illuminate\Support\ServiceProvider;

class InversionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(IAuthService::class, AuthService::class);
        $this->app->bind(IClientCompanyService::class, ClientCompanyService::class);
        //:end-bindings:
    }
}
