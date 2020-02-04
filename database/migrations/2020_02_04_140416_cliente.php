<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cliente', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->unsignedBigInteger('cafe_id'); //atributo de la relación
          $table->timestamps();
          $table->foreign('cafe_id')->references('id')->on('cafes'); //clave foránea relación 1:1
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
