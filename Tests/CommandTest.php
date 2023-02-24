<?php

namespace Ikechukwukalu\Databasebackup\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;

class CommandTest extends TestCase
{
    use RefreshDatabase;

    public function test_fires_database_backup_command(): void
    {
        $this->artisan('database:backup')->assertSuccessful();
    }
}
