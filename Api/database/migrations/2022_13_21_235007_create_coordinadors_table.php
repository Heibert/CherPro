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
            $table->string('correoMisena')->unique();
            $table->integer('telefonoCoordinador');
            $table->unsignedBigInteger('id_coordinacion')->unique();
            $table->foreign('id_coordinacion')->references('id')->on('coordinacions')
                                                ->onDelete('cascade');
            $table->foreignId('id_estados')
                        ->nullable()
                        ->constrained('estados')
                        ->cascadeOnUpdate()
                        ->nullOnDelete();
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
