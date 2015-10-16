<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Destino extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destino', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('idviaje');
            $table->string('nombre')->unique();
            $table->string('distancia');
            $table->text('descripcion');
            $table->timestamps();
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destino');
    }
}