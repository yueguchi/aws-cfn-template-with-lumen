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
        switch (env('APP_ENV')) {
            case 'local':
                break;
            case 'stg':
                break;
            case 'unit':
                break;
            default:
                $this->app->bind(\App\Repositories\User\UserRepository::class, \App\Repositories\User\UserRepositoryImpl::class);
        }
    }
}
