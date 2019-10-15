<?php

namespace rafitio\LaravelMonitoringLog;

use Illuminate\Support\ServiceProvider;

class MonitoringLogServiceProvider extends ServiceProvider
{
    /**
     * Publishes config files
     * 
     * @return void
     */
    public function boot(){
        $this->publishes([
            __DIR__.'/..config/monitoring_log.php' => config_path('monitoring_log/php')
        ],
        'laravel-monitoring-log-config');
    }

     /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel_monitoring_log.php',
            'laravel_monitoring_log'
        );
    }
}