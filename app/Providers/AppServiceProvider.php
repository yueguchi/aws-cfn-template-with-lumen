<?php

namespace App\Providers;

use function Couchbase\defaultDecoder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // TODO
        switch (env('APP_ENV')) {
            case 'local':
                $this->app->bind(\App\Repositories\User\UserRepository::class, \App\Repositories\User\UserRepositoryImpl::class);
                break;
            case 'stg':
                $this->app->bind(\App\Repositories\User\UserRepository::class, \App\Repositories\User\UserRepositoryImpl::class);
                break;
            case 'unit':
                $this->app->bind(\App\Repositories\User\UserRepository::class, \App\Repositories\User\UserRepositoryImpl::class);
                break;
            default:
                $this->app->bind(\App\Repositories\User\UserRepository::class, \App\Repositories\User\UserRepositoryImpl::class);
        }
    }
}
