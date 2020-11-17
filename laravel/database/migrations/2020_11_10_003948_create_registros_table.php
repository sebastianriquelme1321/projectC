<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id('ID_registro');
            $table->integer('ID_condominio')->unsigned();
            $table->foreign('ID_condominio')->references('ID_condominio')->on('condominios');
            $table->char('Asunto',30);
            $table->integer('Monto');              
            $table->date('Fecha_de_pago');           
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
        Schema::dropIfExists('registros');
    }
}
