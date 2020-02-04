<?php

use Illuminate\Database\Seeder;

class SturbucksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('starbucks')->insert([
          'id' => '1',
          'name'=>'Starbucks01',
          'direccion'=>'Ave.Navarra'
      ]);
      DB::table('starbucks')->insert([
          'id' => '2',
          'name'=>'Starbucks02',
          'direccion'=>'Plaza Gipuzkoa'
      ]);
    }
}
