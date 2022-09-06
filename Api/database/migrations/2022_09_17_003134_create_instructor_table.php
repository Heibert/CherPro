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
        Schema::create('instructor', function (Blueprint $table) {
            
            $table->id();
            $table->string('nombreInst'); 
            $table->string('apellidoInst');
            $table->string('tipoDoc');
            $table->integer('numDoc');
            $table->string('correoMisena');
            $table->integer('telefonoInst');
            $table->foreignId('id_programa')
                        ->nullable()
                        ->constrained('programas')
                        ->cascadeOnUpdate()
                        ->nullOnDelete();
            $table->string('password');
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