<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJefeDeHogarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jefe_de_hogars', function (Blueprint $table) {
            $table->id('ID_jefe');
            $table->integer('ID_dept')->unsigned();
            $table->foreign('ID_dept')->references('ID_dept')->on('departamentos');
            $table->char('Rut_jefe',10);
            $table->char('Nombre',30);
            $table->char('Apellido',30);
            $table->char('Fono',9);
            $table->char('Correo',60);
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
        Schema::dropIfExists('jefe_de_hogars');
    }
}
