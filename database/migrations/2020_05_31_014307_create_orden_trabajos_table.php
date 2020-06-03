<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenTrabajosTable extends Migration
{
    
    public function up()
    {
        Schema::create('orden_trabajos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('detalle');
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->integer('cliente_id')->unsigned();

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('orden_trabajos');
    }
}
