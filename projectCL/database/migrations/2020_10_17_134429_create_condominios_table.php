<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondominiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominios', function (Blueprint $table) {
            $table->id('ID_condominio');            
            $table->char('Region',25);
            $table->char('Ciudad',25);
            $table->char('Calle',100);
            $table->integer('Numero');
            $table->char('Rut_ad',12);
            $table->char('Nombre',30);
            $table->char('Apellido',30);
            $table->char('Fono',9);
            $table->char('Correo',60);
            $table->char('Password',20);
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
        Schema::dropIfExists('condominios');
    }
}
