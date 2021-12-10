<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dicaPresente');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('Sorteio_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('participantes');
    }
}