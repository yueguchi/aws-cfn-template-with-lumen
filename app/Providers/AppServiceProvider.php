<?php

namespace App\Providers;

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
                $this->app->bind('App\Repositories\User\UserRepository', 'App\Repositories\User\UserRepositoryImpl');
                $this->app->bind('App\Repositories\Info\InfoRepository', 'App\Repositories\Info\InfoRepositoryImpl');
                break;
            case 'stg':
                $this->app->bind('App\Repositories\User\UserRepository', 'App\Repositories\User\UserRepositoryImpl');
                $this->app->bind('App\Repositories\Info\InfoRepository', 'App\Repositories\Info\InfoRepositoryImpl');
                break;
            case 'unit':
                $this->app->bind('App\Repositories\User\UserRepository', 'App\Repositories\User\UserRepositoryImpl');
                $this->app->bind('App\Repositories\Info\InfoRepository', 'App\Repositories\Info\InfoRepositoryImpl');
                break;
            default:
                $this->app->bind('App\Repositories\User\UserRepository', 'App\Repositories\User\UserRepositoryImpl');
                $this->app->bind('App\Repositories\Info\InfoRepository', 'App\Repositories\Info\InfoRepositoryImpl');
        }
    }
}
