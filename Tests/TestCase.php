<?php

namespace Ikechukwukalu\Databasebackup\Tests;

use Ikechukwukalu\Databasebackup\DatabaseBackupServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
      parent::setUp();
    }

    protected function defineDatabaseMigrations()
    {
        $this->loadLaravelMigrations();
    }

    protected function getPackageProviders($app): array
    {
        return [DatabaseBackupServiceProvider::class];
    }
}
