<?php

namespace Database\Factories;

use App\Models\Instructor;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Programa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ficha>
 */
class FichaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "numFicha" => $this->faker->unique(true)->numberBetween(2000000, 2999999),
            "id_instructor" => Instructor::all()->random()->id,
            "id_programa" => Programa::all()->random()->id,
        ];
    }
}
