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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idInstructor');
            $table->unsignedBigInteger('idCoordinador');
            $table->date('fechaReporte');
            $table->timestamps();

            $table->foreign('idInstructor')->references('id')->on('instructores');
            $table->foreign('idCoordinador')->references('id')->on('coordinadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportes');
    }
};
