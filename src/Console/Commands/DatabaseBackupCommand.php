<?php

namespace Ikechukwukalu\Databasebackup\Console\Commands;

use Illuminate\Console\Command;

class DatabaseBackupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $command = config('databasebackup.remote_access') ?
        config('databasebackup.remote_backup_command') :
        config('databasebackup.local_backup_command');

        $returnVar = NULL;
        $output  = NULL;

        exec($command, $output, $returnVar);
        $this->components->info('Database backup was successful.');
    }
}
