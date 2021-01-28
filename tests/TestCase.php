<?php

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Schema;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();

        if (env('APP_ENV') === 'production') exit('Fatal! APP is in production');

        //Truncates all tables in the database
        Schema::disableForeignKeyConstraints();

        $tableNames = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();
        foreach ($tableNames as $table) {
            if ($table != 'migrations')
                DB::table($table)->truncate();
        }

        Schema::enableForeignKeyConstraints();


        Artisan::call('migrate --env=testing');

        Artisan::call('db:seed', ['--env' => 'testing']);
    }
}
