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
        Schema::create('coordinadores', function (Blueprint $table) {
            $table->id();

            $table->string('nomCoordinador');
            $table->string('apeCoordinador');
            $table->char('tipoDoc');
            $table->integer('numDoc');
            $table->string('correoMisena');
            $table->integer('telefonoCoordinador');

            $table->unsignedBigInteger('idCoordinacion')->unique();
            $table->foreignId('idCoordinacion')->references('id')->on('coordinaciones')
                                                ->onDelete('cascade');
            

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