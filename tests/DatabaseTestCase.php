<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * Description of DatabaseTestCase
 *
 * @author ervinne
 */
class DatabaseTestCase extends TestCase {

    use DatabaseMigrations {
        runDatabaseMigrations as baseRunDatabaseMigrations;
    }

    /**
     * Define hooks to migrate the database before and after each test.
     *
     * @return void
     */
    public function runDatabaseMigrations() {
        $this->baseRunDatabaseMigrations();
        $this->artisan('db:seed');
    }

}
