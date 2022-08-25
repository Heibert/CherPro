<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Aprendiz;
use App\Models\Tematica;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "fechaAsistencia" => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'idAprendiz'=> Aprendiz::all()->random()->id,
            'idTematica'=> Tematica::all()->random()->id,
        ];
    }
}