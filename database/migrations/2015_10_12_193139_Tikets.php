

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tikets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->increments('id');  
            $table->integer('idviaje');
            $table->integer('idreserva');
            $table->string('codigo')->unique();
            $table->string('tipo_cupo');
            $table->text('descripcion');
            $table->decimal('precio', 7, 2);
            $table->string('estado');
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
          Schema::dropIfExists('tikets');
    }
}
