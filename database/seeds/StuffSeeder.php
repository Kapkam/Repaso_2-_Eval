<?php

use Illuminate\Database\Seeder;

class StuffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('stuff')->insert([
          'id' => '1',
          'name'=>'Firulais',
          'apellido'=>'Rigoverto',
          'email'=>'firulais@gmail.com',
          'password'=>'12345678'
      ]);
      DB::table('stuff')->insert([
          'id' => '2',
          'name'=>'Armando',
          'apellido'=>'Parda',
          'email'=>'armando@gmail.com',
          'password'=>'12345678'
      ]);
      DB::table('stuff')->insert([
          'id' => '3',
          'name'=>'Ana',
          'apellido'=>'Conda',
          'email'=>'ana@gmail.com',
          'password'=>'12345678'
      ]);
      DB::table('stuff')->insert([
          'id' => '4',
          'name'=>'Misco',
          'apellido'=>'Jones',
          'email'=>'mico@gmail.com',
          'password'=>'12345678'
      ]);
      DB::table('stuff')->insert([
          'id' => '5',
          'name'=>'Tomas',
          'apellido'=>'Turvado',
          'email'=>'tomas@gmail.com',
          'password'=>'12345678'
      ]);
      DB::table('stuff')->insert([
          'id' => '6',
          'name'=>'Rosa',
          'apellido'=>'Melano',
          'email'=>'rosa@gmail.com',
          'password'=>'12345678'
      ]);
    }
}
