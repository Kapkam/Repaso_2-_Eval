<?php

use Illuminate\Database\Seeder;

class CafesStarbucksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table('cafe_starbucks')->insert([
           'cafe_id'=>1,
           'starbucks_id'=>1
       ]);
       DB::table('cafe_starbucks')->insert([
         'cafe_id'=>1,
         'starbucks_id'=>2
       ]);

       DB::table('cafe_starbucks')->insert([
         'cafe_id'=>2,
         'starbucks_id'=>2
       ]);
       DB::table('cafe_starbucks')->insert([
         'cafe_id'=>2,
         'starbucks_id'=>1
       ]);

       DB::table('cafe_starbucks')->insert([
         'cafe_id'=>3,
         'starbucks_id'=>1
       ]);
       DB::table('cafe_starbucks')->insert([
         'cafe_id'=>3,
         'starbucks_id'=>2
       ]);

       DB::table('cafe_starbucks')->insert([
         'cafe_id'=>4,
         'starbucks_id'=>1
       ]);
       DB::table('cafe_starbucks')->insert([
         'cafe_id'=>4,
         'starbucks_id'=>2
       ]);

       DB::table('cafe_starbucks')->insert([
         'cafe_id'=>5,
         'starbucks_id'=>1
       ]);
       DB::table('cafe_starbucks')->insert([
         'cafe_id'=>5,
         'starbucks_id'=>2
       ]);

       DB::table('cafe_starbucks')->insert([
         'cafe_id'=>6,
         'starbucks_id'=>2
       ]);
       DB::table('cafe_starbucks')->insert([
         'cafe_id'=>6,
         'starbucks_id'=>1
       ]);

     }
}
