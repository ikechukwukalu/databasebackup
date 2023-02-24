<?php

namespace Ikechukwukalu\Databasebackup;

use Illuminate\Support\ServiceProvider;
use Ikechukwukalu\Databasebackup\Console\Commands\DatabaseBackupCommand;

class DatabaseBackupServiceProvider extends ServiceProvider
{
    public const CONFIG = __DIR__.'/config/databasebackup.php';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                DatabaseBackupCommand::class
            ]);
        }

        $this->publishes([
            self::CONFIG => config_path('databasebackup.php'),
        ], 'db-config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->mergeConfigFrom(
            __DIR__.'/config/databasebackup.php', 'databasebackup'
        );
    }
}
