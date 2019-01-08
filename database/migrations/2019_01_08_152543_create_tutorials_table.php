<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutoriales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 255);
            $table->unsignedInteger('duracion');
            $table->unsignedInteger('publicado');            
            $table->text('observaciones')->nullable();
            $table->unsignedInteger('fabricante_id');
            $table->unsignedInteger('tema_id');
            $table->unsignedInteger('idioma_id');
            $table->unsignedInteger('valoracion_id');
            $table->foreign('fabricante_id')->references('id')->on('fabricantes');
            $table->foreign('tema_id')->references('id')->on('temas');
            $table->foreign('idioma_id')->references('id')->on('idiomas');
            $table->foreign('valoracion_id')->references('id')->on('valoraciones');
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
        Schema::dropIfExists('tutoriales');
    }
}
