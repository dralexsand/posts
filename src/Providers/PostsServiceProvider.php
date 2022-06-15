<?php

namespace Dralexsand\Posts\Providers;

use Dralexsand\Posts\Console\Commands\PostCommand;
use Illuminate\Support\ServiceProvider;

class PostsServiceProvider extends ServiceProvider
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
        $this->loadRoutesFrom(__DIR__ . '/../routes/posts.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'posts');
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/posts'),
            __DIR__ . '/../config/posts.php' => config_path('posts.php'),
        ]);
        /*$this->mergeConfigFrom(
            __DIR__.'/../config/posts.php', 'posts'
        );*/

        if ($this->app->runningInConsole()) {
            $this->commands([
                PostCommand::class,
            ]);
        }
    }
}
