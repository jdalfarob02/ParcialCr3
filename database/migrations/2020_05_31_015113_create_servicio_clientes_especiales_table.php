<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioClientesEspecialesTable extends Migration
{
    public function up()
    {
        Schema::create('servicio_clientes_especiales', function (Blueprint $table) {
            $table->increments('id');
            
            $table->Integer('servicio_id')->unsigned();
            $table->Integer('cliente_id')->unsigned();
            $table->string('Precio');
            $table->foreign('servicio_id')->references('id')->on('servicios');
            $table->foreign('cliente_id')->references('id') ->on('clientes');

            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('servicio_clientes_especiales');
    }
}
