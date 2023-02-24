<?php

namespace Ikechukwukalu\Databasebackup\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class DatabaseBackupKernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */

    protected $commands = [
        'Ikechukwukalu\Databasebackup\Console\Commands\DatabaseBackupCommand'
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('database:backup')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
