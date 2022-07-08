<?php

namespace Outl1ne\LaravelThumbor;

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

        $this->app->singleton(\Outl1ne\LaravelThumbor\Url\BuilderFactory::class, function ($app) {
            return \Outl1ne\LaravelThumbor\Url\BuilderFactory::construct(config('thumbor.url'), config('thumbor.key'));
        });

        $this->app->singleton(\Outl1ne\LaravelThumbor\Mocked\Url\BuilderFactory::class, function ($app) {
            return \Outl1ne\LaravelThumbor\Mocked\Url\BuilderFactory::construct();
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
