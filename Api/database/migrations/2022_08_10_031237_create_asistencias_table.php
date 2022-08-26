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
            $table->char('Asistencia');
            $table->unsignedBigInteger('idAprendiz');
            $table->unsignedBigInteger('idTematica');
            $table->timestamps();

            $table->foreign('idAprendiz')->references('id')->on('aprendices');
            $table->foreign('idTematica')->references('id')->on('tematicas');
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
