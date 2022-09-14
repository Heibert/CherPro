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
            /*$table->foreignId('id_asistencia')
                            ->unique()
                            ->nullable()
                            ->constrained('asistencias')
                            ->cascadeOnUpdate()
                            ->onDelete('cascade');*/
            $table->string('archivo');
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
