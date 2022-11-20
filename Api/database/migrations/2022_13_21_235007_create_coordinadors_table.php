<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinadors', function (Blueprint $table) {
            $table->id();
            $table->string('nomCoordinador');
            $table->string('apeCoordinador');
            $table->char('tipoDoc');
            $table->integer('numDoc')->unique();
            $table->unsignedBigInteger('id_user')->unique();
            $table->foreign('id_user')->references('id')
                                      ->on('users')
                                      ->onDelete('cascade');
            $table->integer('telefonoCoordinador');
            $table->unsignedBigInteger('id_coordinacion')->unique();
            $table->foreign('id_coordinacion')->references('id')
                                              ->on('coordinacions')
                                              ->onDelete('cascade');
    
            $table->text('estado');
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
        Schema::dropIfExists('coordinadores');
    }
};
