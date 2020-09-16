<?php

namespace OptimistDigital\LaravelThumbor;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/thumbor.php', 'thumbor');

        $this->app->singleton(\OptimistDigital\LaravelThumbor\Url\BuilderFactory::class, function ($app) {
            return \OptimistDigital\LaravelThumbor\Url\BuilderFactory::construct(config('thumbor.url'), config('thumbor.key'));
        });

        $this->app->singleton(\OptimistDigital\LaravelThumbor\Mocked\Url\BuilderFactory::class, function ($app) {
            return \OptimistDigital\LaravelThumbor\Mocked\Url\BuilderFactory::construct();
        });
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/thumbor.php' => config_path('thumbor.php'),
        ], 'config');
    }
}
