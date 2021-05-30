<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalzadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()


    {
        Schema::create('calzados', function (Blueprint $table) {

            $table->increments('id');
            $table->string('calzado');
            $table->string('tipo');
            $table->string('color');
            $table->string('talla');
            $table->string('marca');
            $table->string('genero');
            $table->string('edades');


            $table->timestamps();


        });


    }
 public function down()


    {


        Schema::dropIfExists('calzados');


    }

}