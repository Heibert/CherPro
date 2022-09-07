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
        Schema::create('instructor_has_ficha', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')
                ->nullable()
                ->constrained('instructores')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('ficha_id')
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
        Schema::dropIfExists('instructor_has_ficha');
    }
};
