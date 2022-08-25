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
            "nombreTematica" => $this->faker->word(),
            'instructor_id'=> Instructor::all()->random()->id,
            'programa_id'=> Programa::all()->random()->id,
            'ficha_id'=> Ficha::all()->random()->id,
        ];
    }
}
