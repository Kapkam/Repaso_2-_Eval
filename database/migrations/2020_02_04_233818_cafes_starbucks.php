<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CafesStarbucks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cafe_starbucks', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('cafe_id');
        $table->unsignedBigInteger('starbucks_id');
        $table->foreign('cafe_id')->references('id')->on('cafes'); //clave foránea relación M:N
        $table->foreign('starbucks_id')->references('id')->on('starbucks'); //clave foránea relación M:N
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
