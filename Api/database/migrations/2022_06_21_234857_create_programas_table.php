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
        Schema::create('programas', function (Blueprint $table) {

            $table->id();
            $table->string('nombrePrograma');
            $table->foreignId('id_coordinacion')
                                ->nullable()
                                ->constrained('coordinaciones')
                                ->cascadeOnUpdate()
                                ->nullOnDelete();
            $table->timestamps();
    
        });
        Schema::table('coordinaciones', function ($table) {
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
        Schema::dropIfExists('programas');
    }
};
