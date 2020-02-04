<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cliente')->insert([
          'id' => '1',
          'name'=>'Adrián'
      ]);
      DB::table('cliente')->insert([
          'id' => '2',
          'name'=>'Potx'
      ]);
      DB::table('cliente')->insert([
          'id' => '3',
          'name'=>'Asier'
      ]);
      DB::table('cliente')->insert([
          'id' => '4',
          'name'=>'Andrés'
      ]);
      DB::table('cliente')->insert([
          'id' => '5',
          'name'=>'Aimar'
      ]);
      DB::table('cliente')->insert([
          'id' => '6',
          'name'=>'Evalisto'
      ]);
    }
}
