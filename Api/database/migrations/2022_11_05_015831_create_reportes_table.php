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
            $table->date('fechaReporte');
            $table->text('descReporte');
            $table->foreignId('id_coordinador')
                            ->nullable()
                            ->constrained('coordinadors')
                            ->cascadeOnUpdate()
                            ->nullOnDelete();
            $table->foreignId('id_instructor')
                            ->nullable()
                            ->constrained('instructores')
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
        Schema::dropIfExists('reportes');
    }
};
