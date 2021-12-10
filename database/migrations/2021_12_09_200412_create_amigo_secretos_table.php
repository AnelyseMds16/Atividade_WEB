<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmigoSecretosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amigo_secretos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('participante_id');
            $table->foreign('participante_id')->references('id')->on('participantes')->onDelete('cascade');
            $table->unsignedBigInteger('participanteSorteado_id');
            $table->unsignedBigInteger('Sorteio_id');
            $table->foreign('Sorteio_id')->references('id')->on('sorteios')->onDelete('cascade');
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
        Schema::dropIfExists('amigo_secretos');
    }
}