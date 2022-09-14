<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Coordinacion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProgramaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nombrePrograma" => $this->faker->unique()->randomElement(['CGMLTI','Academica',' Centro de Salud','Finanzas','diseño','Biodiversidad','moda','deportes','agricultura','aviacion','petroquimica']),
            /* "id_coordinacion" => Coordinacion::all()->random()->id */
        ];
    }
}
