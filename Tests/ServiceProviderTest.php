<?php

namespace Ikechukwukalu\Databasebackup\Tests;

use Ikechukwukalu\Databasebackup\DatabaseBackupServiceProvider;

class ServiceProviderTest extends TestCase
{
    public function test_merges_config(): void
    {
        static::assertSame(
            $this->app->make('files')
                ->getRequire(DatabaseBackupServiceProvider::CONFIG),
            $this->app->make('config')->get('databasebackup')
        );
    }
}
