<?php

namespace Fingoweb\Speedtest;

use Fingoweb\Speedtest\Console\Commands\CreateSpeedtestSymlink;
use Illuminate\Support\ServiceProvider;

class SpeedtestServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            CreateSpeedtestSymlink::class,
        ]);
    }
}
