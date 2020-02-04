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
      $this->call(SturbucksSeeder::class);
      $this->call(StuffSeeder::class);
      $this->call(CafeSeeder::class);
      $this->call(ClienteSeeder::class);
    }
}
