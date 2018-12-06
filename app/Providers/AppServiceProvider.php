<?php

namespace App\Providers;

use App\Repositories\User\UserRepository;
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
                $this->app->bind(UserRepository::class, UserRepositoryImpl::class);
                break;
            case 'stg':
                $this->app->bind(UserRepository::class, UserRepositoryImpl::class);
                break;
            case 'unit':
                $this->app->bind(UserRepository::class, UserRepositoryImpl::class);
                break;
            default:
                $this->app->bind(UserRepository::class, UserRepositoryImpl::class);
        }
    }
}
