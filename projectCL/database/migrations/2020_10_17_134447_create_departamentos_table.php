<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id('ID_dept');
            $table->integer('ID_condominio')->unsigned()->default(1);
            $table->foreign('ID_condominio')->references('ID_condominio')->on('condominios')->onDelete('set default');
            $table->integer('ID_prop')->unsigned()->default(1);
            $table->foreign('ID_prop')->references('ID_prop')->on('propietarios')->onDelete('set default');
            $table->integer('Numero');
            $table->char('Bloque',1); 
            $table->unique(['Bloque','Numero'],'Combinacion');
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
        Schema::dropIfExists('departamentos');
    }
}
