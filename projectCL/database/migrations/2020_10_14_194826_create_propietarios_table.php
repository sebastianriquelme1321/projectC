<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietarios', function (Blueprint $table) {
            $table->id('ID_prop')->onDelete('cascade');
            $table->char('Rut_prop',12);    
            $table->char('Nombre',100);
            $table->char('Fono',9);
            $table->char('Correo',60);
            $table->char('Razon_Social',100)->nullable(true);
            $table->timestamps();
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propietarios');
    }
}
