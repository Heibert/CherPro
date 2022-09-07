<?php

namespace Database\Factories;

use App\Models\Programa;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coordinacion>
 */
class CoordinacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nomCoordinacion" => $this->faker->randomElement(['Coordinacion del CGMLTI', 'Coordinacion del talento humano en salud','Coordinacion de servicios financieros']),
            "idPrograma" => Programa::all()->random()->id
        ];
    }
}
