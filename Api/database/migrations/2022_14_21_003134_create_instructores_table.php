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
        Schema::create('instructores', function (Blueprint $table) {
            $table->id();
            $table->string('nombreInst'); 
            $table->string('apellidoInst');
            $table->string('tipoDoc');
            $table->integer('numDoc')->unique();
            $table->unsignedBigInteger('id_user')->unique();
            $table->foreign('id_user')->references('id')
                                      ->on('users')
                                      ->onDelete('cascade');
            $table->integer('telefonoInst');
            $table->foreignId('id_programa')
                        ->nullable()
                        ->constrained('programas')
                        ->cascadeOnUpdate()
                        ->nullOnDelete();
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
        Schema::dropIfExists('instructor');
    }
};
