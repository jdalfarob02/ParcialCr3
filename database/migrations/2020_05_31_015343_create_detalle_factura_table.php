<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFacturaTable extends Migration
{
        public function up()
    {
        Schema::create('detalle_factura', function (Blueprint $table) {
            $table->increments('id',11);

            $table->Integer('factura_id')->unsigned();
            $table->Double('Valor');

            $table->foreign('factura_id')
                ->references('id')
                ->on('facturas');

            $table->timestamps();
        });
    }
   
    public function down()
    {
        Schema::dropIfExists('detalle_factura');
    }
}
