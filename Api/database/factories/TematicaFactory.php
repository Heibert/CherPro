<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Instructor;
use App\Models\Programa;
use App\Models\Ficha;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tematica>
 */
class TematicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nombreTematica" => $this->faker->randomElement(['SQL', 'Ingles', 'JS', 'PHP', 'Java','React','C++','C#']),
            'id_instructor'=> Instructor::all()->random()->id,
            'id_programa'=> Programa::all()->random()->id,
            'id_ficha'=> Ficha::all()->random()->id,
        ];
    }
}
