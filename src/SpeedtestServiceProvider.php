<?php

namespace Fingoweb\Speedtest;

use Fingoweb\Speedtest\Console\Commands\CreateSpeedtestSymlink;
use Illuminate\Support\ServiceProvider;

class SpeedtestServiceProvider extends ServiceProvider
{
    /**
     * The package name.
     *
     * @var string
     */

    private string $name = 'speedtest';

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton($this->name, function ($app) {
            return new SpeedtestManager();
        });

        $this->commands([
            CreateSpeedtestSymlink::class,
        ]);
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(self::basePath('/routes/web.php'));
        $this->loadViewsFrom(self::basePath('/resources/views'), $this->name);
    }

    /**
     * Helper function to define the base path for package files.
     *
     * @param string $path
     * @return string
     */
    public static function basePath(string $path): string
    {
        return __DIR__.'/..'.$path;
    }
}
