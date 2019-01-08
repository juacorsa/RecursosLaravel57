<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 255);
            $table->unsignedInteger('paginas');
            $table->unsignedInteger('publicado');            
            $table->text('observaciones')->nullable();
            $table->unsignedInteger('editorial_id');
            $table->unsignedInteger('tema_id');
            $table->unsignedInteger('idioma_id');
            $table->unsignedInteger('valoracion_id');
            $table->foreign('editorial_id')->references('id')->on('valoraciones');
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
        Schema::dropIfExists('libros');
    }
}
