<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()


    {


        Schema::create('ventas', function (Blueprint $table) {


            $table->increments('id');


            $table->string('calzado');


            $table->string('fecha_de_compra');
            $table->string('tipo_de_pago');

            $table->decimal('monto',5,2);


            $table->timestamps();


        });


    }



    public function down()


    {


        Schema::dropIfExists('ventas');


    }

}