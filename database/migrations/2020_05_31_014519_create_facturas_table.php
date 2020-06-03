<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
   
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->double('Total');
            $table->double('Abono');
            $table->double('Saldo');
            $table->integer('Estado');
            $table->Integer('servicio_id')->unsigned();
            $table->foreign('servicio_id')
            ->references('id')
            ->on('servicios');

            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
