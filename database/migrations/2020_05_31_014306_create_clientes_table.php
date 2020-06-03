<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
  
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            
            $table->String('Nombre');
            $table->String('Direccion');
            $table->String('Telefono');
            $table->String('Email');
            $table->Integer('Especial');
            $table->String('ClientesCol');

            $table->timestamps();
        });
    }
   
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
