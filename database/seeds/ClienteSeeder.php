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
          'name'=>'Adrián',
          'cafe_id'=> 1
      ]);
      DB::table('cliente')->insert([
          'id' => '2',
          'name'=>'Potx',
          'cafe_id'=> 2
      ]);
      DB::table('cliente')->insert([
          'id' => '3',
          'name'=>'Asier',
          'cafe_id'=> 3
      ]);
      DB::table('cliente')->insert([
          'id' => '4',
          'name'=>'Andrés',
          'cafe_id'=> 4
      ]);
      DB::table('cliente')->insert([
          'id' => '5',
          'name'=>'Aimar',
          'cafe_id'=> 5
      ]);
      DB::table('cliente')->insert([
          'id' => '6',
          'name'=>'Evalisto',
          'cafe_id'=> 6
      ]);
    }
}
