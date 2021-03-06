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
        switch (env('APP_ENV')) {
            case 'test':
                // TODO
            default:
                $this->app->bind('App\Repositories\User\UserRepository', 'App\Repositories\User\UserRepositoryImple');
                $this->app->bind('App\Repositories\Info\InfoRepository', 'App\Repositories\Info\InfoRepositoryImple');
                $this->app->bind('App\Repositories\TimeTable\TimeTableRepository', 'App\Repositories\TimeTable\TimeTableRepositoryImple');
                $this->app->bind('App\Repositories\Sponsor\SponsorRepository', 'App\Repositories\Sponsor\SponsorRepositoryImple');
                $this->app->bind('App\Repositories\Like\LikeRepository', 'App\Repositories\Like\LikeRepositoryImple');
        }
    }
}
