<?php

use Illuminate\Database\Seeder;

class CafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cafes')->insert([
          'id' => '1',
          'name'=>'Machiatto'
      ]);
      DB::table('cafes')->insert([
          'id' => '2',
          'name'=>'Café Late'
      ]);
      DB::table('cafes')->insert([
          'id' => '3',
          'name'=>'Capuccino'
      ]);
      DB::table('cafes')->insert([
          'id' => '4',
          'name'=>'Caramel Machiatto'
      ]);
      DB::table('cafes')->insert([
          'id' => '5',
          'name'=>'Café Mocha'
      ]);
      DB::table('cafes')->insert([
          'id' => '6',
          'name'=>'Café Latte'
      ]);
    }
}
