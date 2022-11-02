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
        Schema::create('tematicas', function (Blueprint $table) {
            $table->id();
            $table->string('nombreTematica');

            $table->foreignId('id_instructor')
                        ->nullable()
                        ->constrained('instructores')
                        ->cascadeOnUpdate()
                        ->nullOnDelete();
            
            $table->foreignId('id_programa')
                        ->nullable()
                        ->constrained('programas')
                        ->cascadeOnUpdate()
                        ->nullOnDelete();
            
            $table->foreignId('id_ficha')
                        ->nullable()
                        ->constrained('fichas')
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
        Schema::dropIfExists('tematicas');
    }
};
