<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DatabaseComposersSeeder::class);
        $this->call(DatabaseProductsSeeder::class);
        $this->call(DatabasePeriodsSeeder::class);
        $this->call(DatabaseFormsSeeder::class);
    }
}
