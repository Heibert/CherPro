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
        Schema::create('administradors', function (Blueprint $table) {
            
            $table->id();
            $table->string('name');
            $table->string('apellido');
            $table->string('telefono')->unique();  
            $table->unsignedBigInteger('id_user')->unique();
            $table->foreign('id_user')->references('id')
                                        ->on('users')
                                        ->onDelete('cascade');
            $table->foreignId('id_programa')
                            ->nullable()
                            ->constrained('programas')
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
        Schema::dropIfExists('administradores');
    }
};
