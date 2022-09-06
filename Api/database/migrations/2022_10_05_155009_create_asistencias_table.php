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
<<<<<<< HEAD:Api/database/migrations/2022_08_10_031237_create_asistencias_table.php
            $table->char('estadoAsistencia',1);
            $table->unsignedBigInteger('idAprendiz');
            $table->unsignedBigInteger('idTematica');
=======
            $table->foreignId('id_tematica')
                        ->nullable()
                        ->constrained('tematicas')
                        ->cascadeOnUpdate()
                        ->nullOnDelete();
            $table->foreignId('id_aprendiz')
                        ->nullable()
                        ->constrained('aprendiz')
                        ->cascadeOnUpdate()
                        ->nullOnDelete();
>>>>>>> d130205b3880d93e8c64892c58fc376ac7d42f3c:Api/database/migrations/2022_10_05_155009_create_asistencias_table.php
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
