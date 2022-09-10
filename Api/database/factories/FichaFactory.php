<?php

namespace Database\Factories;

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
            "numFicha" => $this->faker->randomElement(["2465880", "2465903", "2567990", "2367981"]),
            "cantAprendiz" => $this->faker->numberBetween(1,40),
            "instuEncargado" => $this->faker->name(),
            "id_programa" => Programa::all()->random()->id,
        ];
    }
}
