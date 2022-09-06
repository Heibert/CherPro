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
        Schema::create('tematica_has_trimestre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tematica')
                  ->nullable()
                  ->constrained('tematicas')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();

            $table->foreignId('id_trimestre')
                  ->nullable()
                  ->constrained('trimestres')
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
        Schema::dropIfExists('tematica_has_trimestre');
    }
};
