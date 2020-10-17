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
            $table->id('ID_prop');
            $table->integer('Rut_emp')->nullable(true);
            $table->char('Ver_emp',1)->nullable(true);
            $table->integer('Rut_ind')->nullable(true);
            $table->char('Ver_ind',1)->nullable(true);
            $table->char('Nombre',30);
            $table->char('Apellido',30);
            $table->char('Fono',9);
            $table->char('Correo',60);
            $table->char('Razon_Social',100)->nullable(true);
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
        Schema::dropIfExists('propietarios');
    }
}
