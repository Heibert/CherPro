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
            "fechaAsistencia" => $this->faker->dateTimeBetween('-1 week'),
            'estadoAsistencia'=> $this->faker->randomElement(['A','F','R','E']),
            'id_tematica' => Tematica::all()->random()->id,
            'id_aprendiz'=> Aprendiz::all()->random()->id,
        ];
    }
}
