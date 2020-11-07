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
    protected $dateFormat = 'd/m/Y';

    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('ID_pagos');
            $table->integer('ID_dept')->unsigned();
            $table->foreign('ID_dept')->references('ID_dept')->on('departamentos');
            $table->integer('Monto');
            $table->date('Fecha_de_pago');
            $table->date('Mes_de_pago');
            $table->char('ComprobanteIMG',100);
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
