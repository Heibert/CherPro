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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->date('fechaAsistencia');
            $table->foreignId('id_tematica')
                        ->nullable()
                        ->constrained('tematicas')
                        ->cascadeOnUpdate()
                        ->nullOnDelete();
            $table->foreignId('id_aprendiz')
                        ->nullable()
                        ->constrained('aprendices')
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
        Schema::dropIfExists('asistencias');
    }
};
