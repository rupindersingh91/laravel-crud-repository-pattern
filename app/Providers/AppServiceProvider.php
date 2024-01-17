<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\PostsRepository;

use App\Models\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostsRepository::class, function ($app) {
            return new PostsRepository(new Post());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
