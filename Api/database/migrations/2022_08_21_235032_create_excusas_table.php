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
        Schema::create('excusas', function (Blueprint $table) {
            $table->id();

            $table->date('fechaExcusa');
            $table->string('descExcusa');

            $table->unsignedBigInteger('idAsistencia')->unique();
            $table->foreign('idAsistencia')->references('id')
                                ->on('asistencias')
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
        Schema::dropIfExists('excusas');
    }
};
