<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enlaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 255);
            $table->string('url');
            $table->text('observaciones')->nullable();
            $table->unsignedInteger('tema_id');
            $table->foreign('tema_id')->references('id')->on('temas');
            $table->unsignedInteger('valoracion_id');
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
        Schema::dropIfExists('enlaces');
    }
}
