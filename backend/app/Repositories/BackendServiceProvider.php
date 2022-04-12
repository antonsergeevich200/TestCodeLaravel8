<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            'App\Repositories\Interfaces\PostRepositoryInterface',
            'App\Repositories\Repository\PostRepository'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\CommentRepositoryInterface',
            'App\Repositories\Repository\CommentRepository'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\UserRepositoryInterface',
            'App\Repositories\Repository\UserRepository'
        );
    }
}
