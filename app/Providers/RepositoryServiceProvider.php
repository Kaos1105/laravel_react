<?php

namespace App\Providers;
use App\Repositories\SystemUser\SystemUserRepository;
use App\Repositories\SystemUser\SystemUserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(SystemUserRepository::class, SystemUserRepositoryEloquent::class);
        //:end-bindings:
    }
}
