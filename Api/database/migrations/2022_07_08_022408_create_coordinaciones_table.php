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
        Schema::create('coordinaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nomCoordinacion');
            $table->unsignedBigInteger('idPrograma');
            $table->timestamps();

            $table->foreign('idPrograma')->references('id')->on('programas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordinaciones');
    }
};
