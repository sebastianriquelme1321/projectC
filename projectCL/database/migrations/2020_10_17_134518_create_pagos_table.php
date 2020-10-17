<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('ID_pagos');
            $table->integer('ID_dept')->unsigned();
            $table->foreign('ID_dept')->references('ID_dept')->on('departamentos');
            $table->integer('Monto');
            $table->char('Fecha_de_pago',10);
            $table->char('Mes_de_pago',7);
            $table->binary('ComprobanteIMG');
            $table->text('Detalle');
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
        Schema::dropIfExists('pagos');
    }
}
